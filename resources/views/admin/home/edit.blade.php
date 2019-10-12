@extends('adminlte::page')


@section('content')

<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/home/{{$data_home->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$data_home->title}}">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<input type="text" name="description" class="form-control" id="description" value="{{$data_home->description}}">
			</div>
			<div class="form-group">
				<label for="file">file</label>
				<input type="file" name="file" class="form-control" id="file">
				{{$data_home->file}}
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" class="form-control" id="image">
				{{$data_home->image}}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>

@endsection