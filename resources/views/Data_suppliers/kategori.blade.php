<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
<div class="container">
    <h2 class="my-4 text-center">Data Kategori</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kode Kategori</th>
                <th scope="col">Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datakategori as $item)
            <tr>
                <td>{{$item->kode_kategori}}</td>
                <td>{{$item->nama_kategori}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Data_suppliers.index') }}" class="btn btn-primary">Kembali</a>
</div>
</body>
</html>
