@extends('adminlte::page')


@section('content')

<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/about/{{$data_about->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" id="title" value="{{$data_about->title}}">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control" id="description" rows="3">
					{{$data_about->description}}
				</textarea>
			</div>
			<div class="form-group">
				<label for="col1">Col1</label>
				<input type="text" name="col1" class="form-control" id="col1" value="{{$data_about->col1}}">
			</div>
			<div class="form-group">
				<label for="col2">Col2</label>
				<input type="text" name="col2" class="form-control" id="col2" value="{{$data_about->col2}}">
			</div>
			<div class="form-group">
				<label for="col3">Col3</label>
				<input type="text" name="col3" class="form-control" id="col3" value="{{$data_about->col3}}">
			</div>
			<div class="form-group">
				<label for="col4">Col4</label>
				<input type="text" name="col4" class="form-control" id="col4" value="{{$data_about->col4}}">
			</div>
			<div class="form-group">
				<label for="title1">Title1</label>
				<input type="text" name="title1" class="form-control" id="title1" value="{{$data_about->title1}}">
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