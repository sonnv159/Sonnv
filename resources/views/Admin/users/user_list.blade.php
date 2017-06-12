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
		<?php $stt=0; ?>
		@foreach ($page as $item)
		<?php $stt++;?>
		<tr class="list_data">
			<td>{!! $stt !!}</td>
			<td>{!! $item->username !!}</td>
			<td>
				@foreach ($item->roles as $role)
					@if($role->id == '1')
			 			<font color="red"> Admin </font>
			 		@elseif ($role->id == '2')
			 			<font color="blue"> Author </font>
			 		@else
			 			Customer
					@endif
				@endforeach
			</td>
			
			<td><a href="{!! route('getUserEdit',['id' => $item['id']]) !!}"> Sửa </a><a href="{!! route('getUserDel',['id'=>$item['id']]) !!}" onclick="return xacnhanxoa('Bạn có muốn xóa thành viên này không?')"> Xóa </a></td>
		</tr>
		@endforeach
	</table>
	{!! $page->links() !!}
@endsection