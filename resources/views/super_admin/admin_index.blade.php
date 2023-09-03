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
                            <h3 class="mb-0  text-white">Data Admin</h3>
                        </div>
                        <div>
                            <a href="{{ route ('admin.create') }}" class="btn btn-white" class="nav-link"><i data-feather="plus" class="nav-icon icon-xs me-2"></i>Tambah</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- table  -->
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jabatan</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                     

                                </tbody>
                            </table>
                        </div>
                      
                    </div>

                </div>
            </div>
            <!-- row  -->
            <div class="row my-6">


            </div>
        </div>
    @endsection
