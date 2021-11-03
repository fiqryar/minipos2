<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MINIPOS</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('startbootstrap-sb-admin-2/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset ('startbootstrap-sb-admin-2/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            @include('layouts.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="orders">
                <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Pembelian Stok Barang</h4>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="pemasok_id" class="form-control-label"> Pemasok </label>
                                    <input type="text" name="pemasok_id" value="{{ old('pemasok_id') }}" class="form-control @error('pemasok_id') is-invalid @enderror">
                                    @error('pemasok_id')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_telp" class="form-control-label"> Telephone </label>
                                    <input type="text" name="no_telp" value="{{ old('no_telp') }}" class="form-control @error('no_telp') is-invalid @enderror" readonly>
                                    @error('no_telp')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="tanggal_masuk" class="form-control-label"> Tanggal Masuk </label>
                                    <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" class="form-control @error('tanggal_masuk') is-invalid @enderror">
                                    @error('tanggal_masuk')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kota" class="form-control-label"> Kota </label>
                                    <input type="text" name="kota" value="{{ old('kota') }}" class="form-control @error('kota') is-invalid @enderror" readonly>
                                    @error('kota')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="total_barang" class="form-control-label"> Total Barang </label>
                                        <input type="text" name="total_barang" value="{{ old('total_barang') }}" class="form-control @error('total_barang') is-invalid @enderror" readonly>
                                        @error('total_barang')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="total" class="form-control-label"> Total Harga </label>
                                        <input type="text" name="total" value="{{ old('total') }}" class="form-control @error('total') is-invalid @enderror" readonly>
                                        @error('total')
                                            <div class="text-muted">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="alamat" class="form-control-label"> Alamat </label>
                                    <input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror" readonly>
                                    @error('alamat')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <a type="button" class="btn btn-primary mb-3 text-white text-weight-bold" data-bs-toggle="modal" data-bs-target="#modalinput"><i class="fa fa-plus"></i> Tambah Barang</a>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Satuan</th>
                                            <th>Harga Jual</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td> 
                                            <td></td> 
                                        </tr> --}}
                                        <tr>
                                            <td colspan="6" class="text-center p-5">
                                                Data Tidak Tersedia
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
@include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
<!-- Modal Insert -->
<div class="modal fade" id="modalinput" tabindex="-1" aria-labelledby="modaldeletelabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <form action="/barang/create" method="POST" enctype="multipart/form-data" class="d-inline">
        @csrf
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Barang</h5>
        </div>
        <div class="modal-body">
            <div class="card-body--">
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0 ;?>
                            @forelse ($barang as $item)
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->satuan }}</td> 
                                <td>Rp. {{ $item->harga_jual }}</td> 
                                <td>
                                    <button type="submit" class="btn btn-primary">Pilih</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center p-5">
                                    Data Tidak Tersedia
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('startbootstrap-sb-admin-2/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('startbootstrap-sb-admin-2/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('startbootstrap-sb-admin-2/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('startbootstrap-sb-admin-2/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>