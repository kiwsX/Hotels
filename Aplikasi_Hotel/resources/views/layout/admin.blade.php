<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{isset($title) ? $title. ' | '.config('app.name') : config('app.name')}}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layout.inc_admin.navbar');

    @include('layout.inc_admin.sidebar');

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid mb-2">
                @yield('content-header')
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </div>


    <aside class="control-sidebar control-sidebar-dark">

        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
</div>

@yield('modal')

<script src="/adminlte/plugins/jquery/jquery.min.js"></script>

<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@stack('js')
<script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>

