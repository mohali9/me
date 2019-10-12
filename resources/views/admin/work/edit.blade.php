@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
		<h1>Data Experience</h1>		
					<div class="modal-body">
						<form action="/admin/work/{{$data_work->id}}/update" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="title1">Title1</label>
                            <input type="text" name="title1" class="form-control" id="title1" value="{{$data_work->title1}}">
							</div>
							<div class="form-group">
								<label for="description1">Description1</label>
								<input type="text" name="description1" class="form-control" id="description1" value="{{$data_work->description1}}">
							</div>
                            <div class="form-group">
                                <label for="image1">Images1</label>
                                <input type="file" name="image1" class="form-control" id="image1">
                                {{$data_work->image1}}
                            </div>
							<div class="form-group">
								<label for="title2">Title2</label>
								<input type="text" name="title2" class="form-control" id="title2" value="{{$data_work->title2}}">
							</div>
							<div class="form-group">
								<label for="description2">Description2</label>
								<input type="text" name="description2" class="form-control" id="description2" value="{{$data_work->description2}}">
							</div>
                            <div class="form-group">
                                <label for="image2">Image2</label>
                                <input type="file" name="image2" class="form-control" id="image2">
                                {{$data_work->image2}}
                            </div>
							<div class="form-group">
								<label for="title3">Title3</label>
								<input type="text" name="title3" class="form-control" id="title3" value="{{$data_work->title3}}">
							</div>
							<div class="form-group">
								<label for="description3">Description3</label>
								<input type="text" name="description3" class="form-control" id="description3" value="{{$data_work->description3}}">
							</div>
                            <div class="form-group">
                                <label for="image3">Image3</label>
                                <input type="file" name="image3" class="form-control" id="image3">
                                {{$data_work->image3}}
                            </div>
							<div class="form-group">
								<label for="title4">Title4</label>
								<input type="text" name="title4" class="form-control" id="title4" value="{{$data_work->title4}}">
							</div>
							<div class="form-group">
								<label for="description4">Description4</label>
								<input type="text" name="description4" class="form-control" id="description4" value="{{$data_work->description4}}">
							</div>
                            <div class="form-group">
                                <label for="image4">Image4</label>
                                <input type="file" name="image4" class="form-control" id="image4">
                                {{$data_work->image4}}
                            </div>
							<div class="form-group">
								<label for="title5">Title5</label>
								<input type="text" name="title5" class="form-control" id="title5" value="{{$data_work->title5}}">
							</div>
							<div class="form-group">
								<label for="description5">Description5</label>
								<input type="text" name="description5" class="form-control" id="description5" value="{{$data_work->description5}}">
							</div>
                            <div class="form-group">
                                <label for="image5">Image5</label>
                                <input type="file" name="image5" class="form-control" id="image5">
                                {{$data_work->image5}}
                            </div>
                            <div class="form-group">
								<label for="title6">Title6</label>
								<input type="text" name="title6" class="form-control" id="title6" value="{{$data_work->title6}}">
							</div>
							<div class="form-group">
								<label for="description6">Description6</label>
								<input type="text" name="description6" class="form-control" id="description6" value="{{$data_work->description6}}">
							</div>
                            <div class="form-group">
                                <label for="image6">Image6</label>
                                <input type="file" name="image6" class="form-control" id="image6">
                                {{$data_work->image6}}
                            </div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
</div>

@endsection