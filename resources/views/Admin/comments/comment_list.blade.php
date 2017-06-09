@extends('admin.master')
@section('title','Danh Sách Bình Luận')
@section('content')
	<table class="list_table">
		<tr class="list_heading">
			<td class="id_col">STT</td>
			<td>Bình Luận</td>
			<td>Tên Sách</td>
			<td>Người Bình Luận</td>
			<td>Thời Gian</td>
			<td>Quản lý</td>
		</tr>
		<tr class="list_data">
			<td>1</td>
			<td>Sách Hay</td>
			<td>Code</td>
			<td>user1</td>
			<td> 1 phút trước</td>
			<td><a href="">Xóa</a>
		</tr>
		<tr class="list_data">
			<td>2</td>
			<td>zzzzzzzzzzxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
			<td>Giáo Khoa</td>
			<td>user2</td>
			<td></td>
			<td><a href="">Xóa</a>
		</tr>
		<tr class="list_data">
			<td>3</td>
			<td>xxxxxxx</td>
			<td>Lịch Sử</td>
			<td>user3</td>
			<td></td>
			<td><a href="">Xóa</a>
		</tr>
	</table>
@endsection