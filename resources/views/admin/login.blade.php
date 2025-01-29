@extends('layout.admin')
@section('css')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
@endsection
@section('page-title')
    Admin Login
@endsection
@section('content')
    @include('layout.show_flash_card')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('admin.login.do') }}" method="POST">
                        @csrf
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 ">Login</p>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="text" id="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="email" />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" />
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('admin.register') }}" class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2025. All rights reserved.
            </div>
            <div>
                <a href="{{ route('customer.register') }}" class="text-white me-4">Customer Register</a>
                <a href="{{ route('customer.login') }}" class="text-white me-4">Customer Login</a>
            </div>
        </div>
    </section>
@endsection
