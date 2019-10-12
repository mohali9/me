@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Data About</h1>
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
						<h5 class="modal-title" id="exampleModalLabel">Input Data About</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control" id="title" required="">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input type="text" name="description" class="form-control" id="description" required="">
							</div>
							<div class="form-group">
								<label for="col1">Col1</label>
								<input type="text" name="col1" class="form-control" id="col1" required="">
							</div>
							<div class="form-group">
								<label for="col2">Col2</label>
								<input type="text" name="col2" class="form-control" id="col2" required="">
							</div>
							<div class="form-group">
								<label for="col3">Col3</label>
								<input type="text" name="col3" class="form-control" id="col3" required="">
							</div>
							<div class="form-group">
								<label for="col4">Col4</label>
								<input type="text" name="col4" class="form-control" id="col4" required="">
							</div>
							<div class="form-group">
								<label for="title1">Title1</label>
								<input type="text" name="title1" class="form-control" id="title1" required="">
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
					<th>COL1</th>
					<th>COL2</th>
					<th>COL3</th>
					<th>COL4</th>
					<th>TITLE1</th>
					<th>AKSI</th>
				</tr>
			</thead>
			@foreach ($data_about as $data_about1)
			<tbody>
				<tr>
					<td>{{$data_about1->title}}</td>
					<td>{!! $data_about1->description !!}</td>
					<td>{{$data_about1->col1}}</td>
					<td>{{$data_about1->col2}}</td>
					<td>{{$data_about1->col3}}</td>
					<td>{{$data_about1->col4}}</td>
					<td>{{$data_about1->title1}}</td>
					<td>
						<a href="/admin/about/{{$data_about1->id}}/edit" class="btn btn-file fa fa-pencil-square-o">Edit</a>
						<a href="/admin/about/{{$data_about1->id}}/delete" type="button" class="btn-file fa fa-trash-o hapus">Delete</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

	</div>
</div>

@endsection