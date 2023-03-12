@extends('layouts.main')

@section('title', 'Resultado')

@section('content')
    <div class="mb-3">
        <p class="text-muted">Nome recebido: {{$nome}}</p>
        <p class="text-muted">Senha recebida: {{$senha}}</p>
    </div>
@endsection