<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ session()->get('role') }} Home Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand"
                href="#">{{ session()->get('first_name') . ' ' . session()->get('last_name') }}</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Welcome To {{ session()->get('role') }} Home Page</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
