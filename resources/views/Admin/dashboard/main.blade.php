@extends('admin.master')
@section('title','Trang chính')
@section('content')
	<table class="function_table">
		
		<tr>
			<td class="function_item user_add"><a href="{!! route('getUserAdd') !!}"> Thêm Thành Viên </a></td>
			<td class="function_item user_list"><a href="{!! route('getUserList') !!}"> Quản Lý Thành Viên </a></td>
		</tr>
		
		<tr>
			<td class="function_item book_add"><a href=""> Thêm Sách </a></td>
			<td class="function_item book_list"><a href=""> Quản Lý sách </a></td>
		</tr>
		<tr>
			<td class="function_item comment_list"><a href=""> Quản Lý Bình Luận </a></td>
		</tr>
	</table>
@endsection