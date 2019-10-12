@extends('adminlte::page')


@section('content')
<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/experience/{{$data_experience->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$data_experience->title}}">
			</div>
			<div class="form-group">
				<label for="title1">Title1</label>
				<input type="text" name="title1" class="form-control" id="title1" value="{{$data_experience->title1}}">
			</div>
			<div class="form-group">
				<label for="description1">Description1</label>
				<textarea name="description1" class="form-control" id="description1">
					{{$data_experience->description1}}
				</textarea>
			</div>
			<div class="form-group">
				<label for="title2">Title2</label>
				<input type="text" name="title2" class="form-control" id="title2" value="{{$data_experience->title2}}">
			</div>
			<div class="form-group">
				<label for="description2">Description2</label>
				<textarea name="description2" class="form-control" id="description2">
					{{$data_experience->description2}}
				</textarea>
			</div>
			<div class="form-group">
				<label for="title3">Title3</label>
				<input type="text" name="title3" class="form-control" id="title3" value="{{$data_experience->title3}}">
			</div>
			<div class="form-group">
				<label for="description3">Description3</label>
				<input type="text" name="description3" class="form-control" id="description3" value="{{$data_experience->description3}}">
			</div>
			<div class="form-group">
				<label for="title4">Title4</label>
				<input type="text" name="title4" class="form-control" id="title4" value="{{$data_experience->title4}}">
			</div>
			<div class="form-group">
				<label for="description4">Description4</label>
				<input type="text" name="description4" class="form-control" id="description4" value="{{$data_experience->description4}}">
			</div>
			<div class="form-group">
				<label for="title5">Title5</label>
				<input type="text" name="title5" class="form-control" id="title5" value="{{$data_experience->title5}}">
			</div>
			<div class="form-group">
				<label for="description5">Description5</label>
				<input type="text" name="description5" class="form-control" id="description5" value="{{$data_experience->description5}}">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>
@endsection

@section('js')
<script>
	CKEDITOR.replace('description1','description2');
</script>
@endsection