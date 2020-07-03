<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
@php
    $pageTitle = 'Yonkou';
    $pageColor = 'purple';
@endphp

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('material/assets/img/apple-icon.png') !!}">
  <link rel="icon" type="image/png" href="{!! asset('material/assets/img/favicon.png') !!}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ $pageTitle }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{!! asset('material/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet') !!}" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{!! asset('material/assets/demo/demo.css" rel="stylesheet') !!}" />
</head>

<body class="">
  <div class="wrapper ">
    @include('material.index.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('material.index.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
      @include('material.index.footer')
    </div>
  </div>
  @include('material.index.sidebarfilter')
  @include('material.index.script')
</body>

</html>
