@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Senar</h6>
            <div class="my-2"></div>
            <a href="{{url('tambah')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus "></i>
                </span>
                <span class="text">Tambah Senar</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Merk</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>    
                    {{-- <tfoot>
                        <tr>
                            <th>Merk</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
@endsection