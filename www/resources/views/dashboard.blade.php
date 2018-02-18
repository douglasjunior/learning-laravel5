@extends('layouts.app') 
@section('content')
<div class="text-center">
    <h1>Dashboard</h1>
</div>
<h3 class="mt-2">Seus posts</h3>
@if (count($posts) > 0)
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="/posts/{{$post->id}}" class="btn">
                                        Visualizar
                                    </a>
                </td>
                <td>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">
                                        Editar
                                    </a>
                </td>
                <td>
                    <!-- -->
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
                    <!-- -->
                    {{Form::submit('Excluir', ['class' => 'btn btn-danger'])}}
                    <!-- -->
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <!-- -->
        {{$posts->links()}}
        <!-- -->
        @else
        <p>Você não tem nenhum post.</p>
        <a class="btn btn-primary mt-2" href="/posts/create" role="button">Criar post</a> @endif
    </div>
</div>
@endsection
