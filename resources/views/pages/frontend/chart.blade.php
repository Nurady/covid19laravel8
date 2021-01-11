@extends ('layouts.frontend.default')

@section ('title')
    Grafik
@endsection

@section('content')
<div class="content-graphic text-center mb-3" style="margin-top:160px;">
    <h3>Grafik Covid 19</h3>
</div>

<!-- Coverage section -->
<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 100px;">
        <div class="col-md-6" data-aos="fade-up">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="TotalChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="PositipChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="RecoveredChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="DeathChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="CareChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1200">
            <div class="card chart" style="margin-bottom:20px;">
                <div style="">
                    <canvas id="QarantineChart"></canvas>
                </div>
             </div>
        </div>

    </div>    
</div>
<!-- Coverage end section -->
@endsection

@push('after-script')
<script src="{{ url ('frontend/js/chart.js') }}"></script>
<!-- Total Comulative Case -->
<script>
		var myCanvas = document.getElementById("TotalChart");
		var ctx = myCanvas.getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ '#74c7b8' ],
					borderColor: [ '#ffcda3'	],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},
            options: {
                title: {
                    display: true,
                    text: 'Grafik Jumlah Total Kasus Covid 19 Tahun 2020'
                }
            }
		});
</script>

<!-- Total Positip Case -->
<script>
		var ctx = document.getElementById("PositipChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ '#ee9595' ],
					borderColor: [ 'red' ],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},
            options: {
                title: {
                    display: true,
                    text: 'Grafik Kasus Positip Covid 19 Tahun 2020'
                }
            }
		});
</script>

<!-- Total Recovered Case -->
<script>
		var ctx = document.getElementById("RecoveredChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ '#008891' ],
					borderColor: [ '#0f3057' ],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},
            options: {
                title: {
                    display: true,
                    text: 'Grafik Kasus Sembuh Covid 19 Tahun 2020'
                }
            }
		});
</script>

<!-- Total Death Case -->
<script>
		var ctx = document.getElementById("DeathChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ 'rgb(106, 90, 205)' ],
					borderColor: [ 'rgb(255, 165, 0)' ],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},

            options: {
                title: {
                    display: true,
                    text: 'Grafik Kasus Meninggal Covid 19 Tahun 2020'
                }
            }
		});
</script>

<!-- Total Care Case -->
<script>
		var ctx = document.getElementById("CareChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ '#e8efeb' ],
					borderColor: [ '#295939' ],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},
            options: {
                title: {
                    display: true,
                    text: 'Grafik Kasus Perawatan Covid 19 Tahun 2020'
                }
            }
		});
</script>

<!-- Total Quarantine Case -->
<script>
		var ctx = document.getElementById("QarantineChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ],
				datasets: [{
					label: '',
					data: [12, 19, 3, 23, 2, 3, 50, 40, 30, 80, 90, 300],
					backgroundColor: [ '#f9e0ae' ],
					borderColor: [ '#682c0e' ],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			},
            options: {
                title: {
                    display: true,
                    text: 'Grafik Kasus Karantina Covid 19 Tahun 2020'
                }
            }
		});
</script>
@endpush
