@extends('layouts.main')

@section('title', 'Form')

@section('content')

<form action="/login" method="post">
    @csrf
    <x-input user="Nome de usuário:" placeUser="Insira seu nome..." senha="Senha:" placeSenha="Insira sua senha..."/>
</form>

@endsection
