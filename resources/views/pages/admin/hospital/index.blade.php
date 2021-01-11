@extends('layouts.admin.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Data Rumah Sakit Rujukan</h1>  
  <a href="{{ route('hospital.create')}}" class="btn btn-sm btn-success shadow-sm">
  <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Data Rumah Sakit Rujukan
  </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp.</th>
                    <th>E-mail</th>
                    <th>Tipe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->address }} </td>
                        <td> {{ $item->phone }} </td>
                        <td> {{ $item->email }} </td>
                        <td> {{ $item->type }} </td>
                        <td class="text-center" style="width: 15%;">
                            <a href="{{ route('hospital.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>                            
                            </a>                                                        
                            <form action="{{ route('hospital.destroy', $item->id) }}" method="POST" class="d-inline">
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
                        Belum Ada Rumah Sakit Rujukan
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
