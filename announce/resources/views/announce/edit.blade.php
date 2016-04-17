@extends('layouts.main')

@section('content')

<h1 class="well well-lg">Edit Announce</h1>

{!! Form::model($announce,['method' => 'PUT','url'=>['announce/edit',$announce->id]]) !!}

<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection