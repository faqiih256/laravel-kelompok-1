<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <h3>Data Supplier</h3>
                    </div>

                    <div class="card-body">
                        <a href="{{ route('Data_suppliers.create') }}" class="btn btn-md btn-success mb-3">TAMBAH </a>
                        <a href="{{ url('cetak_pdf') }}" class="btn btn-md btn-secondary mb-3" target="_blank">Cetak PDF</a>
                        <a href="{{ url('logout') }}" class="btn btn-md btn-danger mb-3">LOGOUT</a>
                        <form method="post" action="{{url('/cari_kategori')}}">

                        @csrf
                        <select class="form-select" aria-label="Default select example" name="cari-kategori" required>
                            <option value="">Pilih Kategori Supplier</option>
                            @foreach($Data_Kategori as $item)
                            <option value="{{$item->nama_kategori}}">{{$item->nama_kategori}}</option>
                            @endforeach
                        </select>

                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered">
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
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
$no = 1;
                                    @endphp

                                  @forelse ($Data_suppliers as $data_supplier)
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
                                        <td class="table-responsive">
                                            <div class="row">

                                                <div class="col-lg-4">
                                                    <a href="{{ route('Data_suppliers.edit', $data_supplier->kode_supplier) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                                </div>

                                                <div class="col-lg-4">
                                                    <a href="{{ route('Data_suppliers.show', $data_supplier->kode_supplier) }}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i> Show</a>
                                                </div>

                                                <div class="col-lg-4">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Data_suppliers.destroy', $data_supplier->kode_supplier) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </div>

                                            </div>   
                                        </td>
                                    </tr>
                                  @empty
                                      <div class="alert alert-danger">
                                          Data Post belum Tersedia.
                                      </div>
                                  @endforelse
                                </tbody>
                              </table>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
