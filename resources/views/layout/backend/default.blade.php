<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/bizadmin/demo/main/index-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2020 17:56:52 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Construction | ADMIN</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="{{asset('public/backend/dist/bootstrap/css/bootstrap.min.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/backend/dist/img/favicon-16x16.png')}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">

@include('layout.backend.style')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  @include('layout.backend.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layout.backend.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
@include('layout.backend.footer')

@include('layout.backend.script')
</body>

<!-- Mirrored from uxliner.com/bizadmin/demo/main/index-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2020 17:56:53 GMT -->
</html>
