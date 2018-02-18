@extends('layouts.app') 
@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">{{$title}}
    </h1>
    <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde
        o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Entrar</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Cadastrar-se</a>
    </p>
</div>
@endsection
