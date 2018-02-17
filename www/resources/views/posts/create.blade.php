@extends('layouts.app') 
@section('content')
<h1>Criar Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Título')}}
    <!-- -->
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Conteúdo')}}
    <!-- -->
    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Conteúdo'])}}
</div>
{{Form::submit('Salvar', ['class' => 'btn btn-primary'])}}
<!-- -->
{!! Form::close() !!}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body');
</script>
@endsection