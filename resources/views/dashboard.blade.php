@extends('layouts.template')
@section('content')
<div class="mt-4 container-fluid">
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="text-gray-800 h3">Dashboard</h1>
    </div>
    <div class="row">
        <!-- Total Kendaraan -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                Total Kendaraan
                            </div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $totalKendaraan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-motorcycle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kendaraan Tersedia -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                Kendaraan Tersedia
                            </div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $kendaraanTersedia }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-motorcycle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumlah Transaksi -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                Jumlah Transaksi
                            </div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $jumlahTransaksi }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-exchange-alt fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumlah Akun Terdaftar -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                Jumlah Akun Terdaftar
                            </div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $jumlahAkun }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-user fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
