@extends('layouts.admin.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Data Publikasi</h1>  
  <a href="{{ route('publications.create')}}" class="btn btn-sm btn-success shadow-sm">
  <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Dokumen Publikasi
  </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td> {{ $item->name }} </td>
                        <td>
                            <a href="{{ Storage::url($item->file) }}" class="btn btn-secondary" target="_blank">
                                view
                            </a>

                            <a href="{{ route('publications.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>                            
                            </a>                                                        
                            <form action="{{ route('publications.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>                          
                        </td>
                    </tr>
                @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        Belum Ada Dokumen Publikasi
                      </td>
                    </tr>
                @endforelse                
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
@endsection
