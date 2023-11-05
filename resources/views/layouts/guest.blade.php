<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <title> @yield('title') | Visa Advice Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Visa Advice Portal" name="description" />
    <meta content="Visa Advice" name="author" />

    @include('layouts.head-css')



</head>

@section('body')

    <body>

    @show

    @yield('content')

    @include('layouts.footer')

    @include('layouts.vendor-scripts')

</body>

</html>
