<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <h3>Data Supplier</h3>
                    </div>

                    

                    <div class="card-body">
                        <a href="{{ route('Data_suppliers.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <a href="{{ url('logout') }}" class="btn btn-md btn-danger mb-3">LOGOUT</a>
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
                              @forelse ($Data_suppliers as $post)
                                <tr>
                                    <td>{{ $no++}}</td>
                                    <td>{{ $post->kode_supplier }}</td>
                                    <td>{{ $post->nama_supplier }}</td>
                                    <td>{{ $post->alamat }}</td>
                                    <td>{{ $post->kota }}</td>
                                    <td>{{ $post->provinsi }}</td>
                                    <td>{{ $post->kode_pos }}</td>
                                    <td>{{ $post->nomor_telepon }}</td>
                                    <td>{{ $post->email }}</td>
                                    <td>{{ $post->kategori_supplier }}</td>
                                    <td>{{ $post->batas_kredit}}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Data_suppliers.destroy', $post->kode_supplier) }}" method="POST">
                                            <a href="{{ route('Data_suppliers.edit', $post->kode_supplier) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
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