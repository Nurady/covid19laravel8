@extends ('layouts.frontend.default')

@section ('title')
    Satgas Covid-19
@endsection

@section('content')
<div class="set-bg" data-setbg="{{ url('frontend/img/heroimg.jpg') }}">
    <div class="container hero2">
        <div class="row text-center d-flex justify-content-center heroimg2" style="margin-top:135px;">
            <div class="text-white">
                <h2 class="row text-center mb-3 pt-5" style="text-transform: uppercase;">Pemerintah Siap dan Serius Menangani COVID-19</h2>
                <p>Masyarakat Tetap Tenang dan Waspada</p>
                <p>COVID-19 Bisa Sembuh</p>
                <div class="typewriter d-flex justify-content-center mb-3">
                    <p class="typing-erase text-center">#LAWANCOVID19</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center text-white subtitle">
            <p>Hubungi Layanan Call Center Tanggap Covid 19 Kabupaten Sumbawa Barat</p>
        </div>
        <div class="row mb-5 pb-5">
            <div class="col-md-6 d-md-flex justify-content-end btn1">
                <a href="https://api.whatsapp.com/send?phone=6285902542000" target="_blank" rel="noopener">
                    <button type="button" class="btn btn-success">WhatsApp : 6285902542000</button>
                </a>           
            </div> 
            <div class="col-md-6 d-md-flex justify-content-start btn2">
                <a href="https://api.whatsapp.com/send?phone=6285333355454" target="_blank" rel="noopener">
                    <button type="button" class="btn btn-success btn2">WhatsApp : 6285333355454</button>
                </a>                
            </div>       
        </div>
    </div>
</div>

<!-- Content Section Begin -->
<div class="container">
    <div class="card mb-5" style="background: #e0ece4;">
        <h3 class="text-center pt-5">Sumbawa Barat Terkini Covid 19</h3>
    <div class="row content">
        <div class="col-sm-12 col-md-4 d-flex justify-content-center card-case">
            <div class="card text-center" 
                    style="width: 18rem; background: linear-gradient(to right, #f5a647 0%, #eb8305 100%);" 
                    data-aos="fade-up">
                <div class="card-body">
                    <!-- <div class="">
                    <img src="{{ url('frontend/img/icon/coronavirus.png') }}" alt="icon total kasus">
                    </div> -->
                    <h4>Total Kasus</h4>
                    <p class="card-text">
                        {{ $totalcase }} Orang
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center card-case">
            <div class="card text-center" 
                    style="width: 18rem; background: linear-gradient(to right, #b54e96 0%, #9c2c7a 100%);"
                    data-aos="fade-up">
                <div class="card-body">
                <!-- <div class="">
                <img src="{{ url('frontend/img/icon/sad.png') }}" alt="icon total kasus">
                </div> -->
                    <h4>Positip</h4>
                    <p class="card-text">
                        {{ $total}} Orang
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 d-flex justify-content-center card-case">
            <div class="card bg-success text-center " style="width: 18rem;" data-aos="fade-up">
                <div class="card-body">
                <!-- <div class="">
                <img src="{{ url('frontend/img/icon/smile.png') }}" alt="icon total kasus">
                </div> -->
                    <h4>Sembuh</h4>
                    <p class="card-text">
                    {{ $totalrecovered }} Orang
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-md-5 d-flex justify-content-center card-case">
            <div class="card text-center" 
                    style="width: 18rem; background: linear-gradient(to right, #f5a647 0%, #eb8305 100%);"
                    data-aos="zoom-in">
                <div class="card-body">
                <!-- <div class="">
                <img src="{{ url('frontend/img/icon/cry.png') }}" alt="icon total kasus">
                </div> -->
                    <h4>Meninggal</h4>
                    <p class="card-text">
                        {{ $totaldeath }} Orang
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-md-5 d-flex justify-content-center card-case">
            <div class="card text-center" 
                    style="width: 18rem; background: linear-gradient(to right, #b54e96 0%, #9c2c7a 100%);"
                    data-aos="zoom-in">
                <div class="card-body">
                <!-- <div class="">
                <img src="{{ url('frontend/img/icon/bed.png') }}" alt="icon total kasus">
                </div> -->
                    <h4>Perawatan</h4>
                    <p class="card-text">
                        {{ $totalcares }} Orang
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-md-5 d-flex justify-content-center card-case">
            <div class="card text-center bg-success" style="width: 18rem;" data-aos="zoom-in">
                <div class="card-body">
                <!-- <div class="">
                <img src="{{ url('frontend/img/icon/home.png') }}" alt="icon total kasus">
                </div> -->
                    <h4>Karantina</h4>
                    <p class="card-text">
                        {{ $totalquarantines }} Orang
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center bg-info" 
                        style="width: 30rem;"
                        data-aos="fade-up" data-aos-duration="1200">
                    <div class="card-body text-center">  
                            <!-- <div class="">
                                <img src="{{ url('frontend/img/icon/traveler.png') }}" alt="icon total kasus">
                            </div>                          -->
                            <h4 class="text-center mb-3">Pelaku Perjalanan</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Karantina</h5>
                                <p class="card-text">
                                {{ $totalpelakukarantina }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                        {{ $totalpelakudiscarded }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center bg-info" style="width: 30rem;"
                        data-aos="fade-up" data-aos-duration="1200">
                    <div class="card-body text-center">
                                <!-- <div class="">
                                    <img src="{{ url('frontend/img/icon/relations.png') }}" alt="icon total kasus">
                                </div>                            -->
                            <h4 class="text-center mb-3">Kontak Erat</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Karantina</h5>
                                <p class="card-text">
                                        {{ $totalkontakkarantina }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                        {{ $totalkontakdiscarded }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center bg-info" style="width: 30rem;"
                        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card-body text-center">
                                <!-- <div class="">
                                    <img src="{{ url('frontend/img/icon/suspect.png') }}" alt="icon total kasus">
                                </div>                            -->
                            <h4 class="text-center mb-3">Kasus Suspek</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Karantina</h5>
                                <p class="card-text">
                                        {{ $totalsuspectkarantina }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                    {{ $totalsuspectdiscarded }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center bg-info" style="width: 30rem;"
                        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card-body text-center">
                                <!-- <div class="">
                                    <img src="{{ url('frontend/img/icon/user.png') }}" alt="icon total kasus">
                                </div>                            -->
                            <h4 class="text-center mb-3">Probable</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Karantina</h5>
                                <p class="card-text">
                                        {{ $totalprobablekarantina }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                        {{ $totalprobablediscarded }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>                  
        </div>
    </div>        
</div>

<!-- DATA API NTB -->
<div class="container">
    <div class="card mb-5" style="background: #ebecf1;">
        <h3 class="text-center pt-5">Data Covid 19 Provinsi NTB</h3>
        <p style="color: black;" class="text-center">Sumber data dari link API : 
            <span>
                <a href="https://corona.ntbprov.go.id/api/data" onMouseOver="this.style.color='green'"
                    onMouseOut="this.style.color='blue'">https://corona.ntbprov.go.id/api/data</a>
            </span>  
        </p>
        <p style="color: black; margin-top:-20px;" class="text-center">Terakhir diperbaharui : {{ $dataNTB['update_terakhir'] }}</p>
        
        <div class="row">
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center" 
                        style="width: 30rem; background: #7c9473;"
                        data-aos="fade-up" data-aos-duration="1200">
                    <div class="card-body text-center">
                            <h4 class="text-center mb-3">Total Pelaku Perjalanan</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5> Masih Karantina </h5>
                                <p class="card-text">
                                    {{ number_format (($dataNTB['total']['pelaku_perjalanan']['masih_karantina']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                    {{ number_format (($dataNTB['total']['pelaku_perjalanan']['discarded']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-md-5 d-flex justify-content-center card-case">
                <div class="card text-center" style="width: 30rem; background: #7c9473;"
                        data-aos="fade-up" data-aos-duration="1200">
                    <div class="card-body text-center">
                            <h4 class="text-center mb-3">Total Kontak Erat</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Karantina</h5>
                                <p class="card-text">
                                    {{ number_format (($dataNTB['total']['kontak_erat']['masih_karantina']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Discarded</h5>
                                <p class="card-text">
                                    {{ number_format (($dataNTB['total']['kontak_erat']['discarded']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div> 
        </div>

        <div class="row mt-3">
            <div class="col d-flex justify-content-center card-case">
                <div class="card text-center" style="width: 55rem; background: #8db596;"
                        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card-body text-center">
                            <h4 class="text-center mb-3">Total Kasus Suspek</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Isolasi</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['kasus_suspek']['masih_isolasi']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Jumlah Probable</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['kasus_suspek']['probable_jumlah']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>probable Meninggal</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['kasus_suspek']['probable_meninggal']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>discarded</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['kasus_suspek']['discarded']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-3">
            <div class="col d-flex justify-content-center card-case">
                <div class="card text-center" style="width: 50rem; background: #999b84;"
                        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="card-body text-center">
                            <h4 class="text-center mb-3">Total konfirmasi</h4>                              
                        <div class="row">
                            <div class="col text-center">
                                <h5>Masih Isolasi</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['konfirmasi']['masih_isolasi']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Sembuh</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['konfirmasi']['sembuh']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                            <div class="col text-center">
                                <h5>Meninggal</h5>
                                <p class="card-text">
                                    {{ number_format (( $dataNTB['total']['konfirmasi']['meninggal']), 0, ',', '.') }} Orang
                                </p>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
        
    </div>        
</div>


<!-- Gallery Section Begin -->
<div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{ url('frontend/img/gallery/2.jpeg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">covid19_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ url('frontend/img/gallery/4.jpeg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">covid19_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ url('frontend/img/gallery/5.jpeg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">covid19_gallery</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ url('frontend/img/gallery/6.jpeg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">covid19_gallery</a></h5>
            </div>
        </div>
</div>
 <!-- Gallery Section End -->


<!-- Partner Section Begin -->
<div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="{{ url ('frontend/img/germas.png') }}" alt="logo germas" style="height: 100px;" />
                    </div>
                </div>
                <div class="logo-item mx-auto">
                    <div class="tablecell-inner">
                        <img src="{{ url ('frontend/img/kemenkes.png') }}" alt="logo kemenkes" style="height: 100px;" />
                    </div>
                </div>
                <div class="logo-item mx-auto">
                    <div class="tablecell-inner">
                        <img src="{{ url ('frontend/img/logokominfo.png') }}" alt="logo kominfo" style="height: 100px;" />
                    </div>
                </div>
                <div class="logo-item mx-auto">
                    <div class="tablecell-inner">
                        <img src="{{ url ('frontend/img/satgasina.png') }}" alt="logo satgas covid 19 indonesia" style="height: 100px;"/>
                    </div>
                </div>
                <div class="logo-item mx-auto">
                    <div class="tablecell-inner">
                        <img src="{{ url ('frontend/img/kpcpen.png') }}" alt="logo kpcpen" style=""/>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Partner Logo Section End -->

<button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>
<!-- Content Section End -->
@endsection