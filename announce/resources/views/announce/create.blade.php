@extends('layouts.main')

@section('content')

<div id="create" style="width: 600px; margin-right: auto; margin-left: auto;">

<h1>Create Announce</h1>
    {!! Form::open(['url' => 'announce/create']) !!}
    
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>

@endsection