<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/logo-sc.png" >
    <title>SERVICE CENTER</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"/>
</head>
</head>
<body>
 
<div class="bg-light">
	<div class="row">
		<div class="col bg-light" style="margin-top:20px; margin-bottom:20px">
			<h3 class="text-center">Edit Order</h3>
		</div>
	</div>
</div>

 	@foreach($order_detail as $o)
	<form action="/order/update" method="post">
		{{ csrf_field() }}
		<tabel>
			<tr>
				<td> 
					Nama Pelanggan <input type="text" name="nama_pelanggan" required="required" value="{{$o->id_order}}"> <br/>
				</td>
			</tr>
			<tr>
				<td>
					Jenis Orderan <input type="text" name="nama_order" required="required" value="{{$o->nama_order}}"> <br/>
</td>
</tr>
		Kode Unik <input type="text" name="kode_unik" required="required" value="{{$o->kode_unik}}"> <br/>
		Status Servis <textarea type="text" name="status" required="required" value="{{$o->status}}"></textarea> <br/>
		<button type="button" class="btn btn-danger" style="margin-top:20px; padding-right:20px; padding-left:20px; text-left" href="/order">Batal</button>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
</table>
	</form>
	@endforeach
		
 
</body>
</html>