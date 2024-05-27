<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Supplier</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
</head>
<body>
	
	<center>
		<h5>Laporan PDF Data Supplier</h4>
	
	</center>
 
	<table class='table table-bordered'>
    <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">kode supplier</th>
                                    <th scope="col">nama supplier</th>
                                    <th scope="col">alamat</th>
                                    <th scope="col">kota</th>
                                    <th scope="col">provinsi</th>
                                    <th scope="col">kode pos</th>
                                    <th scope="col">nomor telepon</th>
                                    <th scope="col">email</th>
                                    <th scope="col">kategori supplier</th>
                                    <th scope="col">batas kredit</th>
            
                                  </tr>
                                </thead>
		<tbody>
        @php
$no = 1;
                                    @endphp

                                  @foreach ($supplier as $data_supplier)
                                    <tr>
                                        <td>{{ $no++}}</td>
                                        <td>{{ $data_supplier->kode_supplier }}</td>
                                        <td>{{ $data_supplier->nama_supplier }}</td>
                                        <td>{{ $data_supplier->alamat }}</td>
                                        <td>{{ $data_supplier->kota }}</td>
                                        <td>{{ $data_supplier->provinsi }}</td>
                                        <td>{{ $data_supplier->kode_pos }}</td>
                                        <td>{{ $data_supplier->nomor_telepon }}</td>
                                        <td>{{ $data_supplier->email }}</td>
                                        <td>{{ $data_supplier->kategori_supplier }}</td>
                                        <td>Rp.{{ $data_supplier->batas_kredit}}</td>
    </tr>
                                        @endforeach
		</tbody>
	</table>
 
</body>
</html>