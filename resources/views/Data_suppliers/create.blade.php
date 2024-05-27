<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Supplier - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('Data_suppliers.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Nama supplier</label>
                                <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode pos</label>
                                <input type="number" class="form-control" id="kode_pos" name="kode_pos" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_supplier" class="form-label">Kategori Supplier</label>
                                <select class="custom-select" id="inputGroupSelect01" name="kategori_supplier" >
                                    <option selected>pilih kategori</option>
                                    @foreach($Data_Kategori as $item)
                                    <option value="{{$item->nama_kategori}}">{{$item->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="batas_kredit" class="form-label">Batas Kredit</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" id="batas_kredit" name="batas_kredit" aria-describedby="emailHelp">
                            </div>
</div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <a href="{{ route('Data_suppliers.index') }}" class="btn btn-md btn-warning">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>
