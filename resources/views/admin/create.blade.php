@extends('layouts.adminlayout')
@section('adminContent')
@include('inc.messages')
    {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div>    
            {{Form::label('text','Text')}}
            {{Form::textarea('text','',['class'=>'form-control','placeholder'=>'Text'])}}<br> 
        </div>
            {{Form::submit('Save',['class'=>'btn btn-success btn-lg btn-block'])}}
    {!! Form::close() !!}

@endsection