{{-- <form action="{{ route('input.get') }}">
    <input type="text" name="name">
    <br>
    <input type="text" name="type">
    <br>
    <input type="text" name="condition">
    <br>
    <input type="text" name="quantity">
    <br>
    <button type="submit">Simpan</button>
</form> --}}

@extends('auth.theme')

@section('content')

    <body class="bg-light">
        <!-- container -->
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0
          min-vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card smooth-shadow-md">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <h1>Sistem Peminjaman Barang</h1>
                                <p class="mb-6">Inputkan Data Peminjaman Barang Anda</p>

                            </div>
                            <!-- Form -->
                            <form>
                                <!-- Username -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Name</label>
                                    <input type="text" id="username" class="form-control" name="username"
                                        placeholder="Name" required="">
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <input type="type" id="type" class="form-control" name="type"
                                        placeholder="Type here" required="">
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="condition" class="form-label">Condition</label>
                                    <input type="condition" id="condition" class="form-control" name="condition"
                                        placeholder="condition" required="">
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="quantity" id="quantity" class="form-control" name="quantity"
                                        placeholder="quantity" required="">
                                </div>

                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                    </div>


                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
@endsection
