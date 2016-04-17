@extends('layouts.main')

@section('content')

<h1>Announces</h1>
<a href="{{url('/announce/create')}}" class="btn btn-success">Create Announce</a>
<hr>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>View</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($announce as $announce)
		<tr>
			<td>{{ $announce->id }}</td>
			<td>{{ $announce->title }}</td>
			<td>{{ $announce->description }}</td>
			<td><a href="{{url('announce/show',$announce->id)}}" class="btn btn-primary">View</a></td>
			<td>
				<!-- {!! Form::open(['method' => 'DELETE', 'url'=>['announce/destroy/{id}']]) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!} -->
				<form action="{{url('announce/destroy',$announce->id)}}" method="POST">
					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}

					<button type="submit" class="btn btn-danger">
						<i class="fa fa-trash"></i> Delete
					</button>
				</form>
			</td>
		</tr>
		@endforeach

	</tbody>

</table>

@endsection