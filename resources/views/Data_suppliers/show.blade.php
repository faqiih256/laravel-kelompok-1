<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <form action="{{ route('Data_suppliers.update', $data_supplier->kode_supplier) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            @csrf
                            <div class="mb-3">
                                <label for="nama_supplier" class="form-label">Nama supplier</label>
                                <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier', $data_supplier->nama_supplier) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $data_supplier->alamat) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" value="{{ old('kota', $data_supplier->kota) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi', $data_supplier->provinsi) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $data_supplier->kode_pos) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomer_telepon', $data_supplier->nomor_telepon) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $data_supplier->email) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_supplier" class="form-label">Kategori Supplier</label>
                                <input type="text" class="form-control" id="kategori_supplier" name="kategori_supplier" value="{{ old('kategori_supplier', $data_supplier->kategori_supplier) }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="batas_kredit" class="form-label">Batas Kredit</label>
                                <input type="text" class="form-control" id="batas_kredit" name="batas_kredit" value="{{ old('batas_kredit', $data_supplier->batas_kredit) }}" disabled>
                            </div>
                    

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
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>