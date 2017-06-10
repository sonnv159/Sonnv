@extends('admin.master')
@section('title','Thêm Sách')
@section('content')
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
		<legend>Thông Tin Sách</legend>
		<table>
			<tr>
				<td class="form_label">Tên Sách</td>
				<td class="form_item"><input type="text" name="txtUser" size="25"></td>
			</tr>
			<tr>
				<td class="form_label">Mô Tả</td>
				<td class="form_item"><textarea id="txtIntro" cols="=8" rows="5"></textarea></td>
				<script type="text/javascript">
					CKEDITOR.replace( 'txtIntro');
				
				</script>
				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="ok" value="Thêm Sách"></td>
			</tr>

		</table>
	</fieldset>
	</form>
@endsection