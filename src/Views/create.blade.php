@extends('layouts.app')
@section('title', 'Criar Termo')
@section('breadcrumb_title', 'Termos')
@section('breadcrumb_subtitle', 'Criar')

@section('content')
{!! Form::open(['url' => route('termos.store')]) !!}
@include('termo::partials.form')
{!! Form::close() !!}
@endsection