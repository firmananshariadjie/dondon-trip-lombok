@extends('admin.partials.header')
@section('container')

<!-- Toastr -->
<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Tambah Data Produk
                            </button>
                            <button type="button" class="btn btn-success toastrDefaultSuccess">
                                Launch Success Toast
                            </button>
                            <div class="modal fade" id="modal-primary">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Transaksi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="/produk/posts">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" aria-label=" Default select example" name="kategori">
                                                        <option value="alat">Alat</option>
                                                        <option value="trip">Trip</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_produk">Nama Produk</label>
                                                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama_produk" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_produk">Harga Produk</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text">Rp</div>
                                                        <input type="number" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk" id="harga_produk" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gambar">Gambar Produk</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3" placeholder="Enter ..." required></textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary ">Submit</button>
                                            </div>
                                        </form>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline-light">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                <tr>
                                    <td>{{$produk["kategori"]}}</td>
                                    <td>{{$produk["nama_produk"]}}</td>
                                    <td>Rp. {{$produk["harga_produk"]}}</td>
                                    <td><img src="{{$produk['gambar']}}" alt="" width="200px"></td>
                                    <td>{{$produk["deskripsi"]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Toastr -->
<script src="admin/plugins/toastr/toastr.min.js"></script>
@endsection