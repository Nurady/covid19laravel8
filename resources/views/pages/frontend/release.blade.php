@extends ('layouts.frontend.default')

@section ('title')
    Press Release
@endsection

@section('content')
<div class="content-release text-center mb-3" style="margin-top:160px;">
    <h3>Press Release Covid 19</h3>
    <p>Dokumen di urut berdasarkan press release terbaru</p>
</div>
<div class="container" style="margin-top:-20px;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabel-data" class="table table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width:5%;">#</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col" style="width:15%;">Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td> {{ $item->name }} </td>
                        <td class="text-center download-link">
                            <a href="{{ Storage::url($item->file) }}" target="_blank" class="btn btn-success">
                                <span class="fa fa-download"></span>
                                Lihat
                            </a>                            
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Belum Ada Data Press Release
                            </td>
                        </tr>                    
                    @endforelse 
                </tbody>
            </table> 
            <!--<div class="container pagination-link d-flex justify-content-center">        </div>   -->
       </div>
    </div>
</div>  
@endsection