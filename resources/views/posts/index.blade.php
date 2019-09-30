@extends('layouts.app')

@section('content')
    
    <h1>Company</h1>
    <a href="/laravel_app_v1/public/posts/create" class="btn btn-primary">Add</a>
    @if(count($posts) > 0)
    @foreach ($posts as $post)
        <div class="display-name">
            <div>
                <h4>{{$post->name}}</h4>
                <a href="mailto:{{$post->email}}">{{$post->email}}</a>
                </br>
                <small>{{$post->created_at}}</small>
            </div>
            <div class="edit-and-delete">
                <div><a href="/laravel_app_v1/public/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></div>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                {!!Form::close()!!}
            </div>

        </div>
    @endforeach
    @else
        <p>No Post</p>
    @endif
@endsection