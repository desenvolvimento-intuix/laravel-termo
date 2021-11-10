@extends('layouts.app')
@section('title', 'Editar Termo')
@section('breadcrumb_title', 'Termos')
@section('breadcrumb_subtitle', 'Editar')

@section('content')
<h2>Termo</h2>
<div class="row">
    <div class="col-12">
        {{ $termo->titulo?? NULL }}
    </div>
    <div class="col-12">
        {{ $termo->texto?? NULL }}
    </div>
</div>
<hr>
<h2>Aceites</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Email</th>
        </thead> 
        <tbody>
            @foreach($termo->aceites as $aceite)
                <tr>
                    <td>{{ $aceite->nome }}</td>
                    <td>{{ $aceite->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
