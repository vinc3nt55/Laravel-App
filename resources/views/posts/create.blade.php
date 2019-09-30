@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <div class="form-container">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection