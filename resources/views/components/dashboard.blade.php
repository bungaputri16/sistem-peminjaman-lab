@extends('layouts.theme')

@section('content')

<div class="bg-primary pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0  text-white">Statistik</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
        mb-3">
                        <div>
                            <h4 class="mb-0">Total Peminjaman</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-primary
          rounded-2">
                            <i class="bi bi-briefcase fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">18</h1>
                        <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
        mb-3">
                        <div>
                            <h4 class="mb-0">Total Barang </h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-primary
          rounded-2">
                            <i class="bi bi-list-task fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">132</h1>
                        <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
        mb-3">
                        <div>
                            <h4 class="mb-0">Admin (Lab)</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-primary
          rounded-2">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">12</h1>
                        <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
        mb-3">
                        <div>
                            <h4 class="mb-0">Aktivitas</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-primary
          rounded-2">
                            <i class="bi bi-bullseye fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">76%</h1>
                        <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row  -->
    <div class="row mt-6">
        <div class="col-md-12 col-12">
            <!-- card  -->
            <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white  py-4">
                    <h4 class="mb-0">Permohonan Peminjaman </h4>
                </div>
                <!-- table  -->
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Barang </th>
                                <th>Waktu</th>
                                <th>Jenis</th>
                                <th>Mahasiswa</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex  align-items-center">
                                        <div class="ms-3 lh-1">
                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">Komputer</a></h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">34 menit lalu</td>
                                <td class="align-middle">
                                <span class="badge bg-success">Tidak Habis Pakai</span></td>
                                <td class="align-middle">Bunga Putri D  </td>
                                <td class="align-middle">Diterima  </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex  align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Flashdisk</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">50 menit lalu</td>
                                    <td class="align-middle"> <span class="badge bg-danger">Habis Pakai</span></td>
                                    <td class="align-middle">Bunga Putri D  </td>
                                    <td class="align-middle">Diterima  </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex  align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Komputer</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">34 menit lalu</td>
                                    <td class="align-middle">
                                    <span class="badge bg-success">Tidak Habis Pakai</span></td>
                                    <td class="align-middle">Bunga Putri D  </td>
                                    <td class="align-middle">Diterima  </td>
                                    </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex  align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Flashdisk</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">50 menit lalu</td>
                                    <td class="align-middle"> <span class="badge bg-danger">Habis Pakai</span></td>
                                    <td class="align-middle">Bunga Putri D  </td>
                                    <td class="align-middle">Diterima  </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex  align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Flashdisk</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">50 menit lalu</td>
                                    <td class="align-middle"> <span class="badge bg-danger">Habis Pakai</span></td>
                                    <td class="align-middle">Bunga Putri D  </td>
                                    <td class="align-middle">Diterima  </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="d-flex  align-items-center">
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1"> <a href="#" class="text-inherit">Flashdisk</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">50 menit lalu</td>
                                    <td class="align-middle"> <span class="badge bg-danger">Habis Pakai</span></td>
                                    <td class="align-middle">Bunga Putri D  </td>
                                    <td class="align-middle">Diterima  </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
                <!-- card footer  -->
                <div class="card-footer bg-white text-center">
                    <a href="#" class="link-primary">Lihat Semua </a>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
