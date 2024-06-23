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
                                <h6>
                                    Kunjungi situs kami untuk pengalaman pencatatan data pegawai yang efisien dan mudah digunakan. Dengan antarmuka yang intuitif dan fitur-fitur yang dapat disesuaikan, kami membantu Anda mengelola informasi pegawai dengan lebih efektif, mulai dari informasi pribadi hingga riwayat pekerjaan
                                </h6>
                                <button class="btn" style="background-color: cyan">
                                    <h5>Masuk Sekarang</h5>
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
                                <h1>Website <strong class="fw-bold">ADAWAI App</strong></h1>
                                <h4>Aplikasi Pencatatan Data Pegawai </h4>
                                <h6>
                                    Temukan cara baru untuk meningkatkan produktivitas dan transparansi dalam administrasi sumber daya manusia Anda. Segera coba demo gratis kami dan lihat bagaimana kami dapat membantu Anda menyederhanakan proses pencatatan data pegawai hari ini.
                                </h6>
                                <button class="btn" style="background-color: cyan">
                                    <h5>Coba Gratis</h5>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto gambar">
                            <img src="{{ asset('assets/slideshow/download (1).jpeg') }}" class="img-fluid w-100" alt="...">
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
                                <h1>Sistem Informasi <strong class="fw-bold">ADAWAI App</strong></h1>
                                <h4>Aplikasi Pencatatan Data Pegawai </h4>
                                <h6>
                                    Eksplorasi sistem pencatatan data pegawai kami yang terintegrasi dengan sistem kinerja website untuk pengalaman yang lebih menyeluruh. Dengan kemampuan untuk melacak dan menganalisis kinerja individu serta tim secara real-time, kami membantu meningkatkan efisiensi operasional dan pengambilan keputusan yang lebih tepat dalam manajemen sumber daya manusia.
                                </h6>
                                <button class="btn" style="background-color: cyan">
                                    <h5>Cari Tahu Yuk</h5>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto gambar">
                            <img src="{{ asset('assets/slideshow/Purchase 5 Star Reviews Online _ Socialaudiencemarket_com.jpeg') }}" class="img-fluid w-100" alt="...">
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
                    <h5>
                        Pentingnya mencatat status pernikahan pegawai adalah untuk memastikan kepatuhan terhadap kebijakan perusahaan dan memberikan dukungan yang sesuai dalam manajemen sumber daya manusia
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="container-marital-status" style="width:100%; height:400px;"></div>
        </div>
    </div>

    <div class="row mt-3 px-4 py-4" style="margin-bottom: 8rem;">
        <div class="col-md-6">
            <div id="container-division" style="width:100%; height:500px;"></div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <div>
            <div class="row d-flex justify-content-center">
                <img src="{{ asset('assets/divisi.png') }}" class="img-fluid w-75" alt="">
            </div>
            <div class="row">
                <h5>
                    Sistem kami juga memfasilitasi manajemen talenta yang holistik, memungkinkan divisi untuk mengidentifikasi dan mengembangkan potensi pegawai secara efektif sesuai dengan kebutuhan strategis perusahaan.
                </h5>
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
                        ADAWAI adalah singkatan dari "Aplikasi Data Administrasi Wajib Aparatur Indonesia". Ini adalah sebuah aplikasi yang dikembangkan untuk memudahkan pencatatan dan manajemen data pegawai di lingkungan instansi pemerintah di Indonesia. ADAWAI dirancang untuk mengintegrasikan berbagai informasi administrasi pegawai, seperti data pribadi, riwayat pekerjaan, riwayat pendidikan, dan data lainnya dalam satu platform yang terpusat
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
                     Silahkan masuk kedalam sistem dengan menekan tombol <b>LOGIN</b> di navbar lalu memasukkan data <b>Email</b> dan <b>Password</b> untuk dapat masuk kedalam sistem.
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
                      Masuk kedalam halaman Admin, lalu pilih menu Pegawai, ada di sidebar Admin. lalu klik <b>Tambah Data Pegawai</b>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h5><strong>Bagaimana Lihat Detail Data Pegawai</strong></h5>
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     Masuk kedalam halaman Admin, lalu pilih menu Pegawai, ada di sidebar Admin. lalu klik tombol <b>detail</b> pada salah satu data yang di tampilkan dalam tabel.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{ asset('js/grafik/guest/script.js') }}">
</script>
@endpush
@endsection
