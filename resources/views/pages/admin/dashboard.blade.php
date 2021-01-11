@extends ('layouts.admin.app')

@section ('title')
    ADMIN
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Rekapitulasi Covid 19</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Kasus
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalcase }} orang</div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kasus Positip</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total }} orang</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kasus Sembuh</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalrecovered }} orang</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Kasus Meninggal
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totaldeath }} Orang</div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Perawatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalcares }} Orang</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Karantina</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalquarantines }} Orang</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Press Release</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $total_release }} Dokumen</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Pending Requests Card Example -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pelaku Perjalanan
                            </div>
                            <div class="row text-center">
                                <div class="col text-center">
                                    <P class="text-center">Karantina</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalpelakukarantina }} Orang</div>
                                </div>
                                <div class="col">
                                    <P>Discarded</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalpelakudiscarded }} Orang</div>
                                </div>
                            </div>                            
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kontak Erat
                            </div>
                            <div class="row text-center">
                                <div class="col text-center">
                                    <P class="text-center">Karantina</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalkontakkarantina }} Orang</div>
                                </div>
                                <div class="col">
                                    <P>Discarded</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalkontakdiscarded }} Orang</div>
                                </div>
                            </div>                            
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kasus Suspek
                            </div>
                            <div class="row text-center">
                                <div class="col text-center">
                                    <P class="text-center">Karantina</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalsuspectkarantina }} Orang</div>
                                </div>
                                <div class="col">
                                    <P>Discarded</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalsuspectdiscarded }} Orang</div>
                                </div>
                            </div>                            
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

         <!-- Pending Requests Card Example -->
         <div class="col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kasus Probable
                            </div>
                            <div class="row text-center">
                                <div class="col text-center">
                                    <P class="text-center">Karantina</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalprobablekarantina }} Orang</div>
                                </div>
                                <div class="col">
                                    <P>Discarded</P>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $totalprobablediscarded }} Orang</div>
                                </div>
                            </div>                            
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">       
    </div>
</div>
<!-- /.container-fluid -->
@endsection