@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Data Experience</h1>
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
						<h5 class="modal-title" id="exampleModalLabel">Input Data Experience</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('experience.store')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control" id="title" required="">
							</div>
							<div class="form-group">
								<label for="title1">Title1</label>
								<input type="text" name="title1" class="form-control" id="title1" required="">
							</div>
							<div class="form-group">
								<label for="description1">Description1</label>
								<input type="text" name="description1" class="form-control" id="description1" required="">
							</div>
							<div class="form-group">
								<label for="title2">Title2</label>
								<input type="text" name="title2" class="form-control" id="title2" required="">
							</div>
							<div class="form-group">
								<label for="description2">Description2</label>
								<input type="text" name="description2" class="form-control" id="description2" required="">
							</div>
							<div class="form-group">
								<label for="title3">Title3</label>
								<input type="text" name="title3" class="form-control" id="title3" required="">
							</div>
							<div class="form-group">
								<label for="description3">Description3</label>
								<input type="text" name="description3" class="form-control" id="description3" required="">
							</div>
							<div class="form-group">
								<label for="title4">Title4</label>
								<input type="text" name="title4" class="form-control" id="title4" required="">
							</div>
							<div class="form-group">
								<label for="description4">Description4</label>
								<input type="text" name="description4" class="form-control" id="description4" required="">
							</div>
							<div class="form-group">
								<label for="title5">Title5</label>
								<input type="text" name="title5" class="form-control" id="title5" required="">
							</div>
							<div class="form-group">
								<label for="description5">Description5</label>
								<input type="text" name="description5" class="form-control" id="description5" required="">
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
					<th>Title</th>
					<th>Title1</th>
					<th>Description1</th>
					<th>Title2</th>
					<th>Description2</th>
					<th>Title3</th>
					<th>Description3</th>
					<th>Title4</th>
					<th>Description4</th>
					<th>Title5</th>
					<th>Description5</th>
				</tr>
			</thead>
			@foreach ($data_experience as $data_experience1)
			<tbody>
				<tr>
					<td>{{$data_experience1->title}}</td>
					<td>{{$data_experience1->title1}}</td>
					<td>{!!$data_experience1->description1!!}</td>
					<td>{{$data_experience1->title2}}</td>
					<td>{{$data_experience1->description2}}</td>
					<td>{{$data_experience1->title3}}</td>
					<td>{{$data_experience1->description3}}</td>
					<td>{{$data_experience1->title4}}</td>
					<td>{{$data_experience1->description4}}</td>
					<td>{{$data_experience1->title5}}</td>
					<td>{{$data_experience1->description5}}</td>
					<td>
						<a href="/admin/experience/{{$data_experience1->id}}/edit" class="btn btn-file fa fa-pencil-square-o">Edit</a>
						<a href="/admin/experience/{{$data_experience1->id}}/delete" type="button" class="btn-file fa fa-trash-o hapus">Delete</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

	</div>
</div>

@endsection