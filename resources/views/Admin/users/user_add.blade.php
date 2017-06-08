@extends('admin.master')
@section('title','Thêm Thành Viên')
@section('content')
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
		<legend>Thông Tin Thành Viên</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="txtUser" size="25">
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="txtPass" size="25">
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="Password" name="txtRepass" size="25">
			</tr>
			<tr>
				<td>Role</td>
				<td><input type="radio" name="rdoRole" value="1">Admin
					<input type="radio" name="rdoRole" value="2">Author
					<input type="radio" name="rdoRole" value="3" checked="checked">Customer</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Thêm"></td>
			</tr>

		</table>
	</fieldset>
	</form>
@endsection