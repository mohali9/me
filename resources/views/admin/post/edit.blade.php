@extends('adminlte::page')


@section('content')

<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/post/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$data->title}}">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<input type="text" name="content" class="form-control" id="content" value="{{$data->content}}">
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" class="form-control" id="image">
				{{$data->image}}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>

@endsection