<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} {{ $pageTitle != null ? '- ' . $pageTitle : '' }}</title>

    <link rel="icon" href="{{ asset('asset/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('asset/favicon.ico') }}" type="image/x-icon" />

    <!--plugins-->
    <link href="{{ asset('dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('dashboard/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/sass/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" />

    @yield('styles')
</head>

<body>
