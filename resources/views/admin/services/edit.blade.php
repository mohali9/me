@extends('adminlte::page')


@section('content')
<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/services/{{$data_services->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$data_services->title}}">
			</div>
			<div class="form-group">
				<label for="title1">Title1</label>
				<input type="text" name="title1" class="form-control" id="title1" value="{{$data_services->title1}}">
			</div>
			<div class="form-group">
				<label for="description1">Description1</label>
				<input type="text" name="description1" class="form-control" id="description1" value="{{$data_services->description1}}">
			</div>
			<div class="form-group">
				<label for="title2">Title2</label>
				<input type="text" name="title2" class="form-control" id="title2" value="{{$data_services->title2}}">
			</div>
			<div class="form-group">
				<label for="description2">Description2</label>
				<input type="text" name="description2" class="form-control" id="description2" value="{{$data_services->description2}}">
			</div>
			<div class="form-group">
				<label for="title3">Title3</label>
				<input type="text" name="title3" class="form-control" id="title3" value="{{$data_services->title3}}">
			</div>
			<div class="form-group">
				<label for="description3">Description3</label>
				<input type="text" name="description3" class="form-control" id="description3" value="{{$data_services->description3}}">
			</div>
			<div class="form-group">
				<label for="title4">Title4</label>
				<input type="text" name="title4" class="form-control" id="title4" value="{{$data_services->title4}}">
			</div>
			<div class="form-group">
				<label for="description4">Description4</label>
				<input type="text" name="description4" class="form-control" id="description4" value="{{$data_services->description4}}">
			</div>
			<div class="form-group">
				<label for="title5">Title5</label>
				<input type="text" name="title5" class="form-control" id="title5" value="{{$data_services->title5}}">
			</div>
			<div class="form-group">
				<label for="description5">Description5</label>
				<input type="text" name="description5" class="form-control" id="description5" value="{{$data_services->description5}}">
			</div>
			<div class="form-group">
				<label for="title6">Title6</label>
				<input type="text" name="title6" class="form-control" id="title6" value="{{$data_services->title6}}">
			</div>
			<div class="form-group">
				<label for="description6">Description6</label>
				<input type="text" name="description6" class="form-control" id="description6" value="{{$data_services->description6}}">
			</div>
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" class="form-control" id="image">
				{{$data_services->image}}
			</div>
			<div class="form-group">
				<label for="title7">Title7</label>
				<input type="text" name="title7" class="form-control" id="title7" value="{{$data_services->title7}}">
			</div>
			<div class="form-group">
				<label for="title8">Title8</label>
				<input type="text" name="title8" class="form-control" id="title8" value="{{$data_services->title8}}">
			</div>
			<div class="form-group">
				<label for="title9">Title9</label>
				<input type="text" name="title9" class="form-control" id="title9" value="{{$data_services->title9}}">
			</div>
			<div class="form-group">
				<label for="title10">Title10</label>
				<input type="text" name="title10" class="form-control" id="title10" value="{{$data_services->title10}}">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>
@endsection

{{-- @section('js')
<script>
	CKEDITOR.replace('description');
</script>
@endsection --}}