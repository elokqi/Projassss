@extends('layout.master')

@section('SERVICE CENTER', 'Halaman Order')
@section('konten')
<div class="">
	<div class="bg-light">
		<div class="row">
			<div class="col bg-light" style="margin-top:20px; margin-bottom:20px">
				<h3 class="text-center">Data Order</h3>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table" border="1" style="">
			<thead>
				<tr class="bg-primary">
					<th>Id</th>
					<th>Nama Pelanggan</th>
					<th>Orderan</th>
					<th>Kode Unik</th>
					<th>Status</th>
					<!-- <th>Opsi</th> -->
				</tr>
			</thead>
			@foreach($order_detail as $o)
			<tr>
				<td>{{ $o->id_order}}</td>
				<td>{{ $o->nama_pelanggan}}</td>
				<td>{{ $o->nama_order }}</td>
				<td>{{ $o->kode_unik }}</td>
				<td>{{ $o->status }}</td>
				<!-- <td>
					<a href="/order/edit/{{ $o->id_order}}">Edit</a>
					|
					<a href="/order/hapus/{{ $o->id_order}}">Hapus</a>
				</td> -->
			</tr>
			@endforeach
		</table>
		<div class="button-group float-right btn-space">
			<a href="/" class="btn btn-danger ">Back</a> 
			<a href="/order/tambah" class="btn btn-primary">Order</a>
		</div>
	</div>
</div>
@endsection