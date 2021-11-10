
@extends('layouts.app')
@section('title', 'Lista de termos')
@section('breadcrumb_title', 'Termos')
@section('breadcrumb_subtitle', 'Listagem')

@section('content')

<div class="row justify-content-between ">
    <div class="col-2 float-right">
        <a href="{{ route('termos.create') }}" class="btn btn-success mb-2">
            <span class="cui-plus btn-icon mr-2"></span>
            Novo Termo
        </a>
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Titulo</th>
            <th>Slug</th>
            <th>Ações</th>
        </thead> 
        <tbody>
            @foreach($termos as $termo)
                <tr>
                    <td>{{ $termo->titulo }}</td>
                    <td>{{ $termo->slug }}</td>
                    <td>
                        <a href="{{ route('termos.edit', $termo->id)}}" class="btn btn-success"><i class="cui cui-pencil"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
