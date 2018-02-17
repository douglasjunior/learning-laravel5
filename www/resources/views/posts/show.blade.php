@extends('layouts.app') 
@section('content')
<h1>{{$post->title}} #{{$post->id}}</h1>
<div>
    {!! $post->body !!}
</div>
<hr />
<small>
    Criado em {{$post->created_at}}
</small>
<br />
<a href="/posts" class="btn btn-link">
    Voltar
</a>
@endsection
