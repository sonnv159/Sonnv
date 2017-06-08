<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/templates/css/style.css') !!}">
	<script type="text/javascript" src="{!! asset('son_admin/templates/plugins/ckeditor/ckeditor.js') !!}"></script>
</head>
<body>
	<div id="layout">
	<div id="top">Trang chính</div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td><a href=""> Trang chính </a>
				@if(Auth::user()->role_id==1)
				| <a href=""> Quản Lý Thành Viên </a> | <a href=""> Quản Lý Bình Luận</a>
				@endif
				| <a href=""> Quản Lý Sách </a>
				
				 </td>
				<td align="right">Xin chào {!! Auth::user()->username !!} | <a href="{!! route('getLogout') !!}">Đăng xuất</td>
			</tr>
		</table>
	</div>
	<div id="main">
	@yield('content')
	</div>
	<div id="bottom"></div>
	</div>

</body>
</html>