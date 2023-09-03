@extends('layouts.theme')

@section('content')
    <!-- Container fluid -->
    <div class="container-fluid p-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->

                <div class="border-bottom pb-4 mb-4">
                    <h3 class="mb-0 fw-bold">Tambah Admin
                        <a href="" class="btn btn-primary float-right">
                            Kembali
                        </a>
                    </h3>

                </div>
                <div class="row mb-8">


                    <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">


                                <div>
                                    <!-- border -->
                                    <form action="">
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="nama"
                                                class="col-sm-4 col-form-label
                                    form-label">Nama Admin</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="nama" required>
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm-4 col-form-label form-label">Email</label>
                                            <div class="col-md-8 col-12">
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="jabatan"
                                                class="col-sm-4 col-form-label
                                    form-label">Jabatan</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="jabatan" required>
                                            </div>
                                        </div>

                                          <!-- row -->
                                          <div class="mb-3 row">
                                            <label for="usernama"
                                                class="col-sm-4 col-form-label
                                    form-label">Username</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="username" required>
                                            </div>
                                        </div>

                                          <!-- row -->
                                          <div class="mb-3 row">
                                            <label for="password"
                                                class="col-sm-4 col-form-label
                                    form-label">Password</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="password" required>
                                            </div>
                                        </div>


                                        <div class="offset-md-4 col-md-8 mt-4">
                                            <button type="submit" class="btn btn-primary"> Simpan </button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
