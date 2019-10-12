@extends('adminlte::page')


@section('content')
<div class="panel panel-default">
	<h1>Oke</h1>
	<div class="modal-body">
		<form action="/admin/kas/{{$data_kas->id}}/update" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="item">Item</label>
				<input type="text" name="item" class="form-control" id="item" required="" value="{{$data_kas->item}}">
			</div>
			<div class="form-group">
				<label for="qty">Qty</label>
				<input type="number" name="qty" class="form-control" id="qty" required="" value="{{$data_kas->qty}}">
			</div>
			<div class="form-group">
				<label for="harga">Harga</label>
				<input type="number" name="harga" class="form-control" id="description1" required="" value="{{$data_kas->harga}}">
			</div>
			<div class="form-group">
				<label for="total">Total</label>
				<input type="number" name="total" class="form-control" id="total" required="" value="{{$data_kas->total}}">
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