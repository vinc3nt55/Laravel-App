@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <div class="form-container">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{form::text('name', $post->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{form::text('email', $post->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection