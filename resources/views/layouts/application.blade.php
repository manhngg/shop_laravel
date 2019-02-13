<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <!-- CSFR token for ajax call -->
        <meta name="_token" content="{{ csrf_token() }}"/>

        <title>@yield('title') | adidas US</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- icheck checkboxes -->
        <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">
        {{-- <link rel="stylesheet" href="https://raw.githubusercontent.com/fronteed/icheck/1.x/skins/square/yellow.css"> --}}

        <!-- toastr notifications -->
        {{-- <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


        <!-- Font Awesome -->
        {{-- <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        @include('layouts.shim')
    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            @yield('content')
            @include('layouts.footer')
        </div>
  </body>
</html>