@extends ('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kasus Suspek {{ $item->id }} </h1> 
    </div>

    <!-- Munculkan error -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach        
        </ul>
    </div>
    @endif

  <!-- Card Form tambah berita -->
  <div class="card shadow">
    <div class="card-body">
        <form action="{{ route('suspects.update', $item->id)}}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="publish_date">Pusblish Date</label>
                <input type="date" class="form-control" name="publish_date" placeholder="publish_date" value="{{ $item->publish_date }}">
            </div> 
            <div class="form-group">
                <label for="karantina">Total Perawatan</label>
                <input type="number" class="form-control" name="karantina" placeholder="karantina" value="{{ $item->karantina }}">
            </div>
            <div class="form-group">
                <label for="discarded">Total Perawatan</label>
                <input type="number" class="form-control" name="discarded" placeholder="discarded" value="{{ $item->discarded }}">
            </div>      
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection