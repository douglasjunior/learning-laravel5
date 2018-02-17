@extends('layouts.app') 
@section('content')
<h1>Posts</h1>
@if (count($posts) > 0) @foreach($posts as $post)
<div class="card mb-3">
    <div class="card-body">
        <a href="/posts/{{$post->id}}">
            <h3 class="card-title">
                {{$post->title}} #{{$post->id}}
            </h3>
        </a>
        <h6 class="card-subtitle mb-2 text-muted">
            Criado em {{$post->created_at}} por {{$post->user->name}}
        </h6>
    </div>
</div>
@endforeach
<div>
    {{$posts->links()}}
</div>
@else
<p>Nenhum post encontrado.</p>
@endif
@endsection
