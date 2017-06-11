<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/templates/css/style.css') !!}"/>
</head>
<body>
	<div id="layout">
		<div id="top">Admin Area:Login</div>
		<div id="main">
			<form action="" method="post" style="width: 650px; margin: 30px auto;"> <!-- margin: canh lề -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<fieldset>
				
				@include('admin.blocks.error')
				@include('admin.blocks.flash')

				<legend>Thông tin đăng nhập</legend>
				<table align="center">
					<tr>
						<span class="form-label"><td>Username</td></span>
						<td><input type="text" name="username" size="30"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="password" size="30"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="ok" value="Đăng nhập"></td>
					</tr>
				</table>
			</fieldset>
			</form>
		</div>
		<div id="bottom">Copyright &copy 2017</div>
	</div>

</body>
</html>

