@extends('admin.master')
@section('title','Sửa Thành Viên')
@section('content')
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
		<legend>Sửa Thành Viên</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="txtUser" size="25"  value="{{ $user['username'] }}" disabled>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="txtPass" size="25">
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="Password" name="txtRepass" size="25">
			</tr>
			@if(Auth::user()->id != $user['id'])
			<tr>
				<td>Role</td>
				<td>
				@foreach($user->roles as $role)
					@if($role->id == '1' )
					<input type="checkbox" name="cbRole[]" value="1"
					 checked
					>Admin
					@endif
					@if($role->id =='2')
						<input type="checkbox" name="cbRole[]" value="2"
						checked 
						>Author
					@endif
					@if($role->id =='3')
						<input type="checkbox" name="cbRole[]" value="3" 
						checked
						>Customer
					@endif
				@endforeach
				</td>
			</tr>
			@endif
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Sửa"></td>
			</tr>

		</table>
	</fieldset>
	</form>
@endsection