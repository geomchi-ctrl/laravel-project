@extends('layouts.main')
@section('title','Produtos')
@section('content')

<h1>Tela dos Produtos</h1>
@if ($busca != '')
    <p>O usuário está procurando por: {{$busca}}</p>    
@endif
@endsection
