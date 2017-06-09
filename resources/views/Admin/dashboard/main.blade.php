@extends('admin.master')
@section('title','Trang chính')
@section('content')
	<table class="function_table">
		@if(Auth::user()->role_id ==1)
		<tr>
			<td class="function_item user_add"><a href=""> Thêm Thành Viên </a></td>
			<td class="function_item user_list"><a href=""> Quản Lý Thành Viên </a></td>
		</tr>
		@endif
		<tr>
			<td class="function_item book_add"><a href=""> Thêm Sách </a></td>
			<td class="function_item book_list"><a href=""> Quản Lý sách </a></td>
		</tr>
		<tr>
			<td class="function_item comment_list"><a href=""> Quản Lý Bình Luận </a></td>
		</tr>
	</table>
@endsection