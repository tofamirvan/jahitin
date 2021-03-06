@extends('back.master')
@section('title')
Penjahit
@endsection('title')
@section('content')
@include('back.penjahit.add')
<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Penjahit</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Penjahit</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Row grouping </h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>Sukses! </strong>{{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table id="jahitantb" class="table table-hover table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    @php $no = 1 @endphp
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Tangal Pemesananan</th>
                                    <th>Nama Penjahit</th>
                                    <th>Nama Pemesan</th>
                                    <th>Jenis Jahitan</th>
                                    <th>Jumlah Jahitan</th>
                                    <th>Deskripsi</th>
                                    <th>Bahan</th>
                                    <th>Jenis Bahan</th>
                                    <th>Aksesoris</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="#" alt="foto" width="50"></td>
                                        <td>{{ $item->tanggal_pemesanan }}</td>
                                        <td>{{ $item->penjahit['nama_penjahit'] }}</td>
                                        <td>{{ $item->users['nama_user'] }}</td>
                                        <td>{{ $item->jenis_jahitan }}</td>
                                        <td>{{ $item->jumlah_jahitan }}</td>
                                        <td>{{ $item->deskripsi_psn }}</td>
                                        <td>{{ $item->bahan_jahitan }}</td>
                                        <td>{{ $item->jenis_bahan }}</td>
                                        <td>{{ $item->aksesoris_psn }}</td>
                                        <td>sa</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12" style="margin-top:15px;">
                        @if(count($lists) >= 1)
                        Jumlah semua data {{ $lists->last()->count() }}
                        @endif
                        <div style="float:right">
                            {{ $lists->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->

@endsection('content')