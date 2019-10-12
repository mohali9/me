@extends('adminlte::page')


@section('content')
<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/skills/{{$data_skills->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" required="" value="{{$data_skills->title}}">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control" id="description">
					{{$data_skills->description}}
				</textarea>
			</div>
			<div class="form-group">
				<label for="title1">Title1</label>
				<input type="text" name="title1" class="form-control" id="title1" required="" value="{{$data_skills->title1}}">
			</div>
			<div class="form-group">
				<label for="title2">Title2</label>
				<input type="text" name="title2" class="form-control" id="title2" required="" value="{{$data_skills->title2}}">
			</div>
			<div class="form-group">
				<label for="title3">Title3</label>
				<input type="text" name="title3" class="form-control" id="title3" required="" value="{{$data_skills->title3}}">
			</div>
			<div class="form-group">
				<label for="title4">Title4</label>
				<input type="text" name="title4" class="form-control" id="title4" required="" value="{{$data_skills->title4}}">
			</div>
			<div class="form-group">
				<label for="title5">Title5</label>
				<input type="text" name="title5" class="form-control" id="title5" required="" value="{{$data_skills->title5}}">
			</div>
			<div class="form-group">
				<label for="title6">Title6</label>
				<input type="text" name="title6" class="form-control" id="title6" required="" value="{{$data_skills->title6}}">
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
	CKEDITOR.replace('description');
</script>
@endsection