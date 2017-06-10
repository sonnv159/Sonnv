@extends('admin.master')
@section('title','Thông Tin Sách')
@section('content')
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
		<legend>Thông Tin Sách</legend>
		<table>
			<tr>
				<td>Tên Sách</td>
				<td><input type="text" name="txtUser" size="25">
			</tr>
			<tr>
				<td>Mô Tả</td>
				<td><textarea id="txtIntro" cols="=10" rows="5"></textarea>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Thêm"></td>
			</tr>

		</table>
	</fieldset>
	</form>
@endsection