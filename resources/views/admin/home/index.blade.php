@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Data Home</h1>
		<br>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Input Data
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Input Data Home</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control" id="title">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input type="text" name="description" class="form-control" id="description">
							</div>
							<div class="form-group">
								<label for="file">File</label>
								<input type="file" name="file" class="form-control" id="file">
							</div>
							<div class="form-group">
								<label for="image">Image</label>
								<input type="file" name="image" class="form-control" id="image">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>

		<table class="table">
			<thead>
				<tr>
					<th>TITLE</th>
					<th>DESCRIPTION</th>
					<th>FILE</th>
					<th>IMAGE</th>
					<th>AKSI</th>
				</tr>
			</thead>
			@foreach ($data_home as $data_home1)
			<tbody>
				<tr>
					<td>{!! $data_home1->title !!}</td>
					<td>{!! $data_home1->description !!}</td>
					<td>{{$data_home1->file}}</td>
					<td>
						<img src="{{ asset('storage/'.$data_home1->image) }}" title="" height="100">
					</td>
					<td>
						<a href="/admin/home/{{$data_home1->id}}/edit" class="btn btn-file fa fa-pencil-square-o">Edit</a>
						<a href="/admin/home/{{$data_home1->id}}/delete" type="button" class="btn-file fa fa-trash-o hapus">Delete</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

	</div>
</div>

@endsection