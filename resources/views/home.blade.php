@extends('layout.guest.main')

@section('konten-guest')
<div class="container-fluid p-0 " id="Home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active mt-5 mb-5">
                <img src="{{ asset('assets/putih.jpg') }}" class="img-fluid w-50" alt="...">
                <div class="carousel-caption text-start text-black">
                    <div class="row px-2 container-fluid">
                        <div class="col-sm-6 align-items-center d-flex">
                            <div>
                                <h1>Selamat Datang di <strong class="fw-bold">ADAWAI App</strong></h1>
                                <h4>Aplikasi Pencatatan Data Pegawai </h4>
                                <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae earum quod fuga repudiandae adipisci non molestiae illum. Odit commodi corrupti, nobis earum officiis illum alias, deserunt, ex modi rerum nisi!</h6>
                                <button class="btn" style="background-color: cyan">
                                    <h5>Daftar Sekarang</h5>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto gambar">
                            <img src="{{ asset('assets/slideshow/Premium Vector _ Survey form online check list document on study workplace.jpeg') }}" class="img-fluid w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item mt-5  mb-5">
                <img src="{{ asset('assets/putih.jpg') }}" class="img-fluid w-50" alt="...">
                <div class="carousel-caption text-start text-black">
                    <div class="row px-2 container-fluid">
                        <div class="col-sm-6 align-items-center d-flex">
                            <div>
                                <h1>Selamat Datang di <strong class="fw-bold">ADAWAI App</strong></h1>
                                <h4>Aplikasi Pencatatan Data Pegawai </h4>
                                <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae earum quod fuga repudiandae adipisci non molestiae illum. Odit commodi corrupti, nobis earum officiis illum alias, deserunt, ex modi rerum nisi!</h6>
                                <button class="btn" style="background-color: cyan">
                                    <h5>Daftar Sekarang</h5>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto gambar">
                            <img src="{{ asset('assets/slideshow/download (1).jpeg') }}" class="img-fluid w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <div class="me-auto px-2 pb-3 pt-3 rounded-end-circle opacity-30" style="background-color: cyan">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <div class="ms-auto px-2 pb-3 pt-3 rounded-start-circle opacity-30" style="background-color: cyan">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </div>
        </button>
    </div>
</div>
<div class="container-fluid py-3" id="Statistics" style="background-color: cyan;margin-top:5rem;">
    <div class="d-flex justify-content-center mt-5">
        <div class="text-center border-bottom border-black border-5 text-black w-30 mt-4">
            <h2 class="fw-bold"><strong>SUMMARY STATISTICS</strong></h2>
        </div>
    </div>
    <h5 class="fw-semibold text-center">Sedikit Ringkasan Statistik Pegawai yang telah tercatat</h5>
    <div class="row mt-3 px-4 py-4">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <div class="row d-flex justify-content-center">
                    <img src="{{ asset('assets/2cincin.webp') }}" class="img-fluid w-75" alt="">
                </div>
                <div class="row">
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quo quibusdam doloremque dignissimos aperiam esse nam, consequuntur eius labore dolorum!</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="container-marital-status" style="width:100%; height:400px;"></div>
        </div>
    </div>

    <div class="row mt-3 px-4 py-4" style="margin-bottom: 8rem;">
        <div class="col-md-6">
            <div id="container-division" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <div>
            <div class="row d-flex justify-content-center">
                <img src="{{ asset('assets/divisi.png') }}" class="img-fluid w-75" alt="">
            </div>
            <div class="row">
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quo quibusdam doloremque dignissimos aperiam esse nam, consequuntur eius labore dolorum!</h5>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="container-fluid py-3" id="FAQ" style="margin-top: 5rem;margin-bottom:10rem;">
    <div class="d-flex justify-content-center mt-5">
        <div class="text-center border-bottom border-black border-5 text-black w-30 mt-4">
            <h2 class="fw-bold"><strong>FAQ ADAWAI App</strong></h2>
        </div>
    </div>
    <div class="row mt-5 mb-5 d-flex justify-content-center">
        <div class="w-75">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5><strong>Apa itu ADAWAI App</strong></h5>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ex, sapiente quae nobis voluptatem ratione, quisquam repellat iusto architecto, placeat numquam? Quaerat, fuga laudantium odio omnis suscipit ducimus eos illum.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5><strong>Bagaimana Cara Masuk sebagai Admin</strong></h5>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut facilis saepe autem odio nostrum illum pariatur nihil inventore assumenda. Porro?
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5><strong>Bagaimana Cara Memasukkan Data Pegawai</strong></h5>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quia quaerat inventore aperiam corrupti nemo provident voluptate qui ex, omnis fuga autem, sequi veritatis asperiores! Perferendis rem id odio sit!
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5><strong>Bagaimana Lihat Detail Data Pegawai</strong></h5>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente aut quod inventore, adipisci illum perspiciatis.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
    $(document).ready(function() {
        getData();

        function getData() {
            $.ajax({
                type: 'POST',
                url: `{{ route('grafik.get-data') }}`,
                data: {
                    _token: `{{ csrf_token() }}`,
                },
                dataType: 'json',
                success: function(response) {
                    drawDivisionChart(response.data.division);
                    drawMaritalStatusChart(response.data.marital_status);
                },
                error: function(xhr, textstatus, message) {
                    console.log(xhr.responseJSON);
                },
            });
        }

        function drawDivisionChart(data) {
            Highcharts.chart('container-division', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Jumlah Pegawai per Divisi'
                },
                xAxis: {
                    categories: data.map(item => item.division),
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Pegawai'
                    }
                },
                series: [{
                    name: 'Total Pegawai',
                    data: data.map(item => item.total_employees),
                    color: 'cyan'
                }]
            });
        }

        function drawMaritalStatusChart(data) {
            Highcharts.chart('container-marital-status', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Jumlah Pegawai per Marital Status'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y}</b>'
                },
                series: [{
                    name: 'Total Pegawai',
                    colorByPoint: true,
                    data: data.map(item => ({
                        name: item.status,
                        y: item.total_employees
                    }))
                }]
            });
        }
    });
</script>
@endsection
