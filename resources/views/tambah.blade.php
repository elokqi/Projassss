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
			<h3 class="text-center">Data Orderan</h3>
		</div>
	</div>
</div>
 
	<br/>
	<br/>
 <div class= "container center">
	<form action="/order/store" method="post">
		{{ csrf_field() }}
		<table>
		<tr>
			<td>
		Nama Pelanggan 
</td>
<td><input type="text" name="nama_pelanggan" required="required"> <br/></td>
</tr>
	<tr>
	<td>
		Jenis Orderan 
		</td>
<td><input type="text" name="nama_order" required="required"> <br/></td>
</tr>
	<!-- <tr>
	<td>
		Kode Unik 
		</td>
<td><input type="text" name="kode" required="required"> <br/></td>
</tr>
	<tr>
	<td>
		Status Servis 
</td>
<td><textarea type="text" name="status" required="required"></textarea> <br/></td> -->
		</table>
		<div class="button-group btn-space">
			<a href="/order/tambah" class="btn btn-primary">Tambah</a> <!--pake get post-->
			<a href="/order" class="btn btn-danger ">Back</a>
		</div>

	</form>
</div>
</body>
</html>