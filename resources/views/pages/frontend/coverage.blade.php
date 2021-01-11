@extends ('layouts.frontend.default')

@section ('title')
    Peta Sebaran
@endsection

@section('content')
<div class="content-coverage text-center mb-3">
    <h3>Update Sebaran terkini Covid 19</h3>
</div>

<!-- Coverage section -->
    <div class="container">
        <div class="card coverage" style="">
            <img class="card-img-top" src="{{ Storage::url($images->image) }}" alt="Peta sebaran covid 19">
        </div>
    </div>
<!-- Coverage end section -->

@endsection