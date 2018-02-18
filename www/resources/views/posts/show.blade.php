@extends('layouts.app') 
@section('content')
<a href="/posts" class="btn btn-secondary mb-3">
    Voltar
</a>
<h1>{{$post->title}} #{{$post->id}}</h1>
<figure class="figure mt-1">
    <img class="figure-img img-fluid rounded" src="/images/posts/cover_image/{{$post->id}}" alt="Imagem do post {{$post->title}}">
</figure>
<div class="mt-2 mb-3">
    {!! $post->body !!}
</div>
<hr />
<small>
    Criado em {{$post->created_at}} por {{$post->user->name}}
</small>
<!-- -->
@if (!Auth::guest() && Auth::user()->id === $post->user_id)
<hr />
<a href="/posts/{{$post->id}}/edit" class="btn btn-warning">
    Editar
</a>
<!-- -->
{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
<!-- -->
{{Form::submit('Excluir', ['class' => 'btn btn-danger'])}}
<!-- -->
{!! Form::close() !!}
<!-- -->
@endif
@endsection
