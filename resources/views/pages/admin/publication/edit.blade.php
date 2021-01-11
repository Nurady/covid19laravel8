@extends('layouts.admin.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Dokumen Publikasi</h1> 
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach        
            </ul>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('publications.update', $item->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="name" 
                        value="{{ $item->name }}">
                </div>
            <div class="form-group">
                    <label for="file">Dokumen (PDF)</label>
                    <input type="file" class="form-control-file" name="file" placeholder="file">
            </div>   
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
