<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/templates/css/style.css') !!}">
	<script type="text/javascript" src="{!! asset('son_admin/templates/plugins/ckeditor/ckeditor.js') !!}"></script>
</head>
<body id="bg-admin">
	<div id="layout">
	<div id="top">Trang chính</div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td><a href="{!! url('admin') !!}"> Trang chính </a>
				
				| <a href="{!! route('getUserList') !!}"> Quản Lý Thành Viên </a> | <a href=""> Quản Lý Bình Luận</a>
				
				| <a href=""> Quản Lý Sách </a>
				
				 </td>
				<td align="right">Xin chào {!! Auth::user()->username !!} | <a href="{!! route('getLogout') !!}">Đăng xuất</td>
			</tr>
		</table>
	</div>
	<div id="main">
	@include('admin.blocks.error')
	@include('admin.blocks.flash')
	@yield('content')
	</div>
	<div id="bottom"></div>
	</div>

</body>
<script type="text/javascript" src="{!! asset('son_admin/js/myjs.js') !!}"></script>
</html>