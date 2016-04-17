@extends('layouts.main')

@section('content')

<h1>Announce</h1>

<form class="form-horizontal">
    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder={{$announce->title}} readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="description" placeholder={{$announce->description}} readonly>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <a href="{{ url('announce/index')}}" class="btn btn-primary">Back</a>
            <a href="{{url('announce/edit',$announce->id)}}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</form>

@endsection