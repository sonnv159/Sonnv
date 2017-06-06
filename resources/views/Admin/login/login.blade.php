@extends('admin.master')
@section('title','Trang Đăng Nhập')
@section('content')
<form action="" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		@include('admin.blocks.error')
		@include('admin.blocks.flash')
		<legend>Thông tin đăng nhập</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" size="" ="25"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" size="" ="25"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Đăng nhập"></td>
			</tr>
		</table>
	</fieldset>
</form>
@endsection