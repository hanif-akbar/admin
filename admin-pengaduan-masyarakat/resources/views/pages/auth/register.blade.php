@extends('layouts.auth')

@section('page-contents')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="{{ route('sign-up') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nik" required
                                    placeholder="NIK">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="username" required
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" required
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="nama" required
                                    placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="no_telp" required
                                    placeholder="No Telp">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
