@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Kelola Barang</h1>
@stop

@section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Data Barang </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>




<form class="m-0">
    <div class=" row no-gutters align-items-center">

        <!--end of col-->
        <div class="col m-0">
            <input class="form-control form-control-sm form-control-borderless" type="search" placeholder="Cari Barang">
        </div>
        <!--end of col-->
        <div class="col-auto m-3">
            <button class="btn btn-sm btn-success" type="submit">Search</button>
        </div>
        <!--end of col-->
    </div>
</form>

<!--end of col-->




<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    + Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TambahBarang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name='kodebar' required id='date' placeholder="Kode Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name='kodebar' required id='date' placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Kategori</label>
                    <select name="" id="">
                        <option value="">Makanan</option>
                    </select><input type="text" class="form-control" id="exampleInputPassword1" name='kodebar' required id='date' placeholder="Kode Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name='kodebar' required id='date' placeholder="Kode Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Kode Barang</label>
                    <input type="file" class="form-control-file" id="exampleInputPassword1" name='kodebar' required id='date' placeholder="Kode Barang">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop