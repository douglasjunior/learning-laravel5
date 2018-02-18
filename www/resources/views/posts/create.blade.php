@extends('layouts.app') 
@section('content')
<!-- -->
@if($post)
<h1>Editar Post</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'files' => 'true']) !!}
<!-- -->
@else
<h1>Criar Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true]) !!}
<!-- -->
@endif
<div class="form-group">
    {{Form::label('title', 'Título')}}
    <!-- -->
    {{Form::text('title', $post ? $post->title : '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Conteúdo')}}
    <!-- -->
    {{Form::textarea('body', $post ? $post->body : '', ['class' => 'form-control', 'placeholder' => 'Conteúdo'])}}
</div>
@if(!$post)
<div class="form-group">
    {{Form::label('cover_image', 'Imagem de capa')}}
    <!-- -->
    {{Form::file('cover_image', ['class' => 'form-control'])}}
</div>
@endif
<!-- -->
{{Form::submit('Salvar', ['class' => 'btn btn-primary'])}}
<!-- -->
{!! Form::close() !!}
@endsection
