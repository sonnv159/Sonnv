@extends('User.master')
@section('title','Thông Tin Sách')
@section('content')
	<div id="info_book">
	<div id="detail_book">
		<table>
			<tr>
				<td rowspan="2"><img src="{!! asset('son_admin/templates/images/book/huong_noi.jpg') !!}"/></td>
				<td id="title_book">Tiêu đề sách</td>
			</tr>	
			<tr>
				<td>Tác giả<br/>
					Thể loại<br/>
					Ngày Phát Hành</td>
				</td>
			</tr>
		</table>
	</div>
	<div id="intro_book">
		<span id="intro">Giới thiệu</span>
		<p>Có ít nhất một phần ba trong số người quen của chúng ta có tính hướng nội. Họ là những người thích lắng nghe nhiều hơn lên tiếng; họ đổi mới và sáng tạo nhưng không thích tự đề cao bản thân; họ thích làm việc độc lập hơn làm việc theo nhóm. Chính những người hướng nội như Rosa Parks, Chopin, Dr. Seuss, Steve Wozniak đã mang đến nhiều đóng góp lớn lao cho xã hội.
 
		Trong Hướng Nội, Susan Cain chỉ ra được rằng chúng ta đánh giá quá thấp những người hướng nội và rằng sai lầm này đã khiến chúng ta thiệt thòi đến mức nào. Bà giới thiệu cho chúng ta biết những người hướng nội thành đạt – từ một diễn giả hóm hỉnh, năng động phải tìm không gian tĩnh lặng để phục hồi năng lượng sau mỗi lần diễn thuyết, cho đến một nhân viên phá kỷ lục bán hàng biết thầm lặng khai phá sức mạnh của những câu hỏi. Bằng những lập luận mạnh mẽ được nghiên cứu kỹ lưỡng cùng nhiều câu chuyện người thật việc thật sâu sắc, Hướng Nội có sức mạnh làm thay đổi vĩnh viễn cách chúng ta nhìn nhận về những người hướng nội cũng như cách họ nhìn nhận bản thân, một yếu tố quan trọng không kém.</p>
	</div>
	<div id="comment">
		<div id="comment_title">Đánh giá của bạn</div>
		<div id="comment_info">
			<textarea id="comment_content" cols="20" rows="5"></textarea><br/>
			<input type="submit" name="btn_comment" value="Gửi nhận xét">
		</div>
	</div>
	</div>
@endsection