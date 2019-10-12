@extends('adminlte::page')

@section('content')

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
	{{ Session::get('success') }}
</div>
@endif

<div class="panel panel-default">
	<div class="modal-body">
		<h1>Data Penjualan</h1>
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
						<h5 class="modal-title" id="exampleModalLabel">Input Data Kas</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{route('kas.store')}}" method="POST" enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="item">Item</label>
								<input type="text" name="item" class="form-control" id="item" required="">
							</div>
							<div class="form-group">
								<label for="qty">Qty</label>
								<input type="number" name="qty" class="form-control" id="qty" required=""
								onfocus="mulaiHitung()" onblur="berhentiHitung()" />
							</div>
							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="number" name="harga" class="form-control" id="description1" required="" onfocus="mulaiHitung()" onblur="berhentiHitung()" />
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<input type="number" name="total" class="form-control" id="total" required="">
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
					<th>No</th>
					<th>Item</th>
					<th>Qty</th>
					<th>Harga</th>
					<th>Total</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			@foreach ($data_kas as $data_kas1)
			<tbody>
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$data_kas1->item}}</td>
					<td>{{$data_kas1->qty}}</td>
					<td>{{$data_kas1->harga}}</td>
					<td>{{$data_kas1->total}}</td>
					<td>{{$data_kas1->created_at}}</td>
					<td>
						<a href="/admin/kas/{{$data_kas1->id}}/edit" class="btn btn-file fa fa-pencil-square-o">Edit</a>
						<a href="/admin/kas/{{$data_kas1->id}}/delete" type="button" class="btn-file fa fa-trash-o hapus">Delete</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	function mulaiHitung(){
		Interval = setInterval("hitung()",1);
	}
	function hitung(){
		harga	= parseInt(document.getElementById("harga").value);
		qty		= parseInt(document.getElementById("qty").value);
		total 	= harga * qty;
		document.getElementById("total").value = total;

		diskon = "";
		persen = "";
		if (total <= 100000) {
			diskon = (0/100)*total;
			persen = "0%";
		}
		else if (total > 100000 && total <= 200000) {
			diskon = (10/100)*total;
			persen = "10%";
		}
		else if (total > 200000 && total <= 300000) {
			diskon = (20/100)*total;
			persen = "20%";
		}
		else if (total > 300000) {
			diskon = (30/100)*total;
			persen = "30%";
		}
		document.getElementById("diskon").value = persen +"--> "+diskon;
		setelah_diskon = total - diskon;
		document.getElementById("setelah_diskon").value = setelah_diskon;
		bayar			= parseInt(document.getElementById("bayar").value);
		kembalian 		= bayar - setelah_diskon;
		document.getElementById("kembalian").value = kembalian;
	}
	function berhentiHitung(){
		clearInterval(Interval);
	}
</script>
@endsection