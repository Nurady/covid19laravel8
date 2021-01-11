@extends ('layouts.frontend.default')

@section ('title')
    Rumah Sakit Rujukan
@endsection

@section('content')
<div class="content-release text-center mb-3" style="margin-top:160px;">
    <h3>Rumah Sakit Rujukan Covid 19</h3>
</div>
<div class="container">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width:5%;">#</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Telp.</th>
                        <th class="text-center" scope="col">E-mail</th>
                        <th class="text-center" scope="col">Tipe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->address }} </td>
                        <td> {{ $item->phone }} </td>
                        <td> {{ $item->email }} </td>
                        <td> {{ $item->type }} </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Belum Ada Data Rumah Sakit Rujukan
                            </td>
                        </tr>                    
                    @endforelse 
                </tbody>
            </table>   
       </div>
    </div>
</div>  
@endsection