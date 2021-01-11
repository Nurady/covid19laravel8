@extends ('layouts.admin.app')

@section ('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kasus Karantina</h1>
        <a href="{{ route('quarantines.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Kasus Karantina
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
                            <th>Total Karantina</th>                  
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
                                <a href="{{ route('quarantines.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>                            
                                </a>  
                                <form action="{{ route('quarantines.destroy', $item->id) }}" method="POST" class="d-inline">
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
                                Belum Ada Data Kasus Karantina
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