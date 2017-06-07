<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/style.css') !!}">
</head>
<body>
	<div id="layout">
	<div id="top">Trang chính</div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td>Trang chính | Quản lý user | Quản lý Books | Quản lý Comments</td>
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