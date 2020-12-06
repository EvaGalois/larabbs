<!DOCTYPE html>
<!-- 获取 config/app.php 中的 locale 选项 -->
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - iMath 论坛</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

    @include('shared._messages')

    @yield('content')

    </div>

    @include('layouts._footer')

  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>