@extends('layout.admin')
@section('page-title')
    Admin Signup
@endsection
@section('content')
    @include('layout.show_flash_card')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 ">Admin Sign up</p>

                                    <form class="mx-1 mx-md-4" action="{{ route('admin.register.do') }}" method="POST">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="f_name">First Name</label>
                                                <input type="text" name="f_name" class="form-control"
                                                    value="{{ old('f_name') }}" />
                                                @if ($errors->has('f_name'))
                                                    <span class="text-danger">{{ $errors->first('f_name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="l_name">Last Name</label>
                                                <input type="text" name="l_name" class="form-control"
                                                    value="{{ old('l_name') }}" />
                                                @if ($errors->has('l_name'))
                                                    <span class="text-danger">{{ $errors->first('l_name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ old('email') }}" />
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" name="password" class="form-control" />
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password_confirmation">Confirm
                                                    password</label>
                                                <input type="password" name="password_confirmation" class="form-control" />
                                                @if ($errors->has('password_confirmation'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="admin">
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="{{ route('admin.login') }}"
                                                class="btn btn-warning btn-lg me-2">cancel</a>
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="{{ asset('img/reg.webp') }}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
