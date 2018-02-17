@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h3>Seus posts</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
