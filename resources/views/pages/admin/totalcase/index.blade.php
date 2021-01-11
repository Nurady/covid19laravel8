@extends ('layouts.admin.app')

@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Total Kasus</h1>
        <a href="{{ route('totalcases.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Total Kasus
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>NO</th>
                            <th>ID</th>                           
                            <th>Date</th> 
                            <th>Total Kasus</th>                  
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->publish_date }}</td>
                            <td>{{ $item->jumlah }}</td>                   
                            <td>
                                <a href="{{ route('totalcases.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>                            
                                </a>  
                                <form action="{{ route('totalcases.destroy', $item->id) }}" method="POST" class="d-inline">
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
                                Belum Ada Data
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