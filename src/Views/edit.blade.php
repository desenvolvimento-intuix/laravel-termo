@extends('layouts.app')
@section('title', 'Editar Termo')
@section('breadcrumb_title', 'Termos')
@section('breadcrumb_subtitle', 'Editar')

@section('content')
    {!! Form::model($termo, array('route' => array('termos.update', $termo->id), 'method' => 'put')) !!}
        @include('termo::partials.form')
    {!! Form::close() !!}
@endsection
