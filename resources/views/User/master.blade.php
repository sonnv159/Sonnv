<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('son_admin/templates/css/style.css') !!}">
</head>
<body id="bg">
	<div id="layout_pages">
		<div id="top-pages">
				<a href=""><img src="{!! asset('son_admin/templates/images/book_logo.png') !!}"/></a>
				<div id="top_login">
					<div id="login"><a href=""> Đăng nhập</a></div>
					<div id="signup"><a href=""> Đăng ký </a></div>
				</div>
		</div>
		<div id="top_menu_pages">
			<div id="search_form">
				<div id="note">
					<div id="icon"><img src="{!! asset('son_admin/templates/images/icon_search.png') !!}"></div>
					<div id="question">Bạn muốn tìm sách gì ? </div>
				</div>
				<div id="suggest">
					<form action="" method="get">
						<input class="txt_Search" type="text" name="txtSearch" size="50" placeholder="( Nhập tên sách, tên tác giả )" 	> 
						<input class="btn_Search" type="submit" name="btnSearch" value="Tìm Kiếm">
					</form>
				</div>
			</div>
		</div>
	<div id="content_pages">
		<div id="left"></div>
		<div id="main-pages">
			@yield('content')
		</div>
	</div>
	<div id="bottom_pages">Copyright &copy; 2017</div>
	
	</div>
</body>
</html>