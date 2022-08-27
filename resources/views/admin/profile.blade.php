{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset ('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{asset ('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

</head>

<body> --}}
@extends('admin.layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div>
                    {{-- @include('inc.flash-message') --}}
                    <h2>Client edit profile</h2>
                    <hr>
                    <form action="/profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ms-5">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}"
                                id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}"
                                id="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="mb-3">
                            @if (auth()->user()->image)
                                <label for="image">Modifier image</label>
                            @else
                                <label for="image">Ajouter image</label>
                            @endif
                            <input class="form-control" name="image" id="image" type="file"
                                placeholder="Tapper image produit...">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <script src="{{asset ('admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{asset ('admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset ('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- Here is navigation script -->
        <script src="{{ asset('admin/vendor/quixnav/quixnav.min.js') }}"></script>
        <script src="{{asset ('admin/js/quixnav-init.js') }}"></script>
        <script src="{{ asset('admin/js/custom.min.js') }}"></script>
        <!--removeIf(production)-->
        <!-- Demo scripts -->
        <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
        <!--endRemoveIf(production)-->

        <!-- Daterange picker library -->
        <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>

        <script src="{{asset ('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/js/dashboard/dashboard-2.js') }}"></script>
          <!-- Datatable -->
          <script src="{{asset ('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
          <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>

</body>
</html> --}}
    @endsection
