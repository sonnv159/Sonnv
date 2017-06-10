@extends('admin.master')
@section('title','Danh Sách Thành Viên')
@section('content')
	<table class="list_table">
		<tr class="list_heading">
			<td class="id_col">STT</td>
			<td>Username</td>
			<td>Role</td>
			<td class="action_col">Quản lý</td>
		</tr>
		<tr class="list_data">
			<td>1</td>
			<td>superadmin</td>
			<td>admin</td>
			<td><a href=""> Sửa </a><a href=""> Xóa </a></td>
		</tr>
		<tr class="list_data">
			<td>1</td>
			<td>superadmin</td>
			<td>admin</td>
			<td><a href=""> Sửa </a><a href=""> Xóa </a></td>
		</tr>
		<tr class="list_data">
			<td>1</td>
			<td>superadmin</td>
			<td>admin</td>
			<td><a href=""> Sửa </a><a href=""> Xóa </a></td>
		</tr>
	</table>
@endsection