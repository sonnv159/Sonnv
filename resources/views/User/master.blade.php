<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/templates/css/style.css') !!}">
</head>
<body id="bg">
	<div id="layout">
	<div id="top">
		<img src="{!! asset('son_admin/templates/images/banner.png') !!}">
	</div>
	<div id="top-menu">
	<span class="menu-page"><a href=""> Trang Chủ </a> </span>
	<span class="menu-page"><a href=""> Sách </a> </span>
	<span class="menu-page"><a href=""> Giới Thiệu </a> </span>
	<span class="menu-page"><a href=""> Đăng Kí </a> </span>
	<span class="menu-page"><a href=""> Đăng Nhập </a> </span>
	<span class="menu-page"><a href=""> Liên Hệ </a> </span>
	</div>
	<div id="content">
		<div id="left"></div>
		<div id="main">
			@yield('content')
		</div>
	</div>
	<div id="bottom">Copyright &copy; 2017</div>

	</div>
</body>
</html>