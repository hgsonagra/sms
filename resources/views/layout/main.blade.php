<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hiten | Dashboard </title>
    @include('layout.css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layout.sidebar')

        <div class="content-wrapper">

            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">abc </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Hiten </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="content">
                <div class="container-fluid"> --}}
                    {{-- <div class="row"> --}}
                        @yield('My-Content')
                        {{-- </div>
                </div>
            </div> --}}
        </div>
        @include('layout.footer')
    </div>
    @include('layout.script')
</body>

</html>