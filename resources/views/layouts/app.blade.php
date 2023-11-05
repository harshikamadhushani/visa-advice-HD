<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <title> @yield('title') | Visa Advice Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Visa Advice Portal" name="description" />
    <meta content="Visa Advice" name="author" />

    @include('layouts.app-head-css')

</head>

@section('body')

    <body class="g-sidenav-show  bg-gray-100">

    @show

    @include('layouts.slidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.header')

        @yield('content')

    </main>

    @include('layouts.footer')

    @include('layouts.plugins')

    @include('layouts.vendor-scripts')


</body>

</html>
