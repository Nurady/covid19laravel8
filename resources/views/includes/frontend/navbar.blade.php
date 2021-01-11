 <!-- Navbar --> 
 <nav class="row fixed-top navbar navbar-expand-lg navbar-light bg-white navbar-header">  
        <div class="container">       
                <a class="navbar-brand my-auto" href="#">
                  <!-- <img src="{{ url('frontend/img/logosb.png') }}" alt="Lambang Sumbawa Barat" style="height: 120px; width: 120px;"> -->
                  <img src="{{ url('frontend/img/Group 1.png') }}" 
                       alt="Logo Satgas Covid 19 Sumbawa Barat">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav text-uppercase ml-auto">
                    <li class="nav-item ">
                    <a class="nav-link @if(Request::is('/')) active @endif" 
                        href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link @if(Request::is('release-page')) active @endif" 
                        href="{{ route('releasepage') }}">Press Release </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @if(Request::is('coverage-page')) active @endif" 
                        href="{{ route('coveragepage') }}">Sebaran </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @if(Request::is('chart-page')) active @endif" 
                        href="{{ route('chartpage') }}">Grafik </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('publication-page')) active @endif" 
                        href="{{ route('publicationpage') }}">Publikasi</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://covid19.go.id/" target="_blank" rel="noopener">
                            Covid19 Indonesia
                        </a>
                        <a class="dropdown-item" href="https://corona.ntbprov.go.id/" target="_blank" rel="noopener">
                            Covid19 NTB
                        </a>
                        <a class="dropdown-item" href="https://corona.ntbprov.go.id/api/data" target="_blank" rel="noopener">
                            API Covid19 NTB
                        </a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('hospital-page')) active @endif" href="{{ route('hospitalpage') }}">Rumah Sakit Rujukan</a>
                    </li>
                </ul>    
            </div>
        </div> 
    </nav>        
    <!-- Akhir Navbar -->