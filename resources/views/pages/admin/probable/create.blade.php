@extends ('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tambah Kasus Probable</h1> 
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
        <form action="{{ route('probables.store')}}" method="POST" enctype="multipart/form-data">
         @csrf         
            <div class="form-group">
                <label for="publish_date">Pusblish Date</label>
                <input type="date" class="form-control" name="publish_date" placeholder="publish_date" value="{{ old('publish_date')}}">
            </div> 
            <div class="form-group">
                <label for="karantina">Jumlah Karantina</label>
                <input type="number" class="form-control" name="karantina" placeholder="karantina" value="{{ old('karantina')}}">
            </div>
            <div class="form-group">
                <label for="discarded">Jumlah Discarded</label>
                <input type="number" class="form-control" name="discarded" placeholder="discarded" value="{{ old('discarded')}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
     </div>
    </div>
</div>
@endsection