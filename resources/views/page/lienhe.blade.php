@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6760662475294!2d105.8411588149322!3d21.00561828601084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1519110724785" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Biểu mẫu liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p>Vui lòng để lại thông tin, chúng tôi sẽ liên lạc với bạn.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email của bạn (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Tin nhắn của bạn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên lạc</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						43C, 405/80, Bắc CầuHà Nội<br>
						Ngọc Thụy<br>
						Hà Nội
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Địa chỉ văn phòng</h6>
					<p>
						Trường Đại học Bách khoa Hà Nội<br>
						1 Đại Cồ Việt, Bách Khoa<br>
						Hai Bà Trưng, Hà Nội<br>
						<a href="mailto:hungph.dev.ict@gmail.com">hungph.dev.ict@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Tuyển dụng</h6>
					<p>
						Xây dựng một xã hội phát triển <br>
						cùng với chúng tôi <br>
						<a href="hr.hungph.dev.ict@gmail.com">hr.hungph.dev.ict@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection