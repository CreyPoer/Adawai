@extends('layout.admin.main')

@section('konten-admin')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold"><strong>Dashboard Admin</strong></h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
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
                                Rata-rata Gaji Pegawai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 'Rp ' . number_format($averageSalary, 0, ',', '.'); }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Divisi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $divisi }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users-rectangle fa-2x text-gray-300"></i>
                        </div>
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
                                Pegawai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employee }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                    <h6 class="m-0 font-weight-bold fw-bold"><strong>Rata-rata Gaji Pegawai Setiap Divisi</strong></h6>
                    <div class="dropdown no-arrow">
                       <a class="btn bg-black btn-sm" title="Selengkapnya" href="{{ route('admin.divisi') }}"><i class="fa-solid fa-arrow-up-right-from-square text-white" ></i></a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body bg-info">
                    <div class="chart-area bg-white text-black">
                        <canvas id="myBarChart" data-labels="{{ json_encode(array_values($label_avg_sallary)) }}" data-avg="{{ json_encode(array_values($averageSalariesData)) }}"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                    <h6 class="m-0 font-weight-bold"><strong>Pendidikan Terakhir Pegawai</strong></h6>
                    <div class="dropdown no-arrow">
                        <a class="btn btn-sm bg-black" title="Selengkapnya" href="{{ route('admin.employee') }}"><i class="fa-solid fa-arrow-up-right-from-square text-white"></i></a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body bg-info">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart" data-labels="{{ json_encode(array_values($labels)) }}" data-total="{{ json_encode(array_values($total)) }}">
                        </canvas>
                    </div>
                    <div id="legend" class="mt-4 text-center small">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('js/grafik/admin/doughnut_education.js') }}"></script>

        <script src="{{ asset('js/grafik/admin/bar_avg_sallary.js') }}">
    </script>

    @endpush
@endsection
