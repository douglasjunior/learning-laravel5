@extends('layouts.app') 
@section('content')
<a href="/posts" class="btn btn-secondary mb-3">
    Voltar
</a>
<h1>{{$post->title}} #{{$post->id}}</h1>
<div>
    {!! $post->body !!}
</div>
<hr />
<small>
    Criado em {{$post->created_at}} por {{$post->user->name}}
</small>
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
@endsection
