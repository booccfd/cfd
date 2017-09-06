<!DOCTYPE html>
<html lang="ko" xml:lang="ko">
<head>
<title>COMFORD</title>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="No-Cache">
<meta http-equiv="Pragma" content="No-Cache">
<!--<link rel="stylesheet" href="{{asset('../font_awesome/css/font-awesome.css')}}">-->
<link rel="stylesheet" href="{{asset('css/reset.css')}}">
<link rel="stylesheet" href="{{asset('ad_css/content.css')}}">
<!-- <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>
<script src="{{asset('ad_js/common.js')}}"></script>
<script src="{{asset('tinymce/js/tinymce/tinymce.js')}}"></script>


</head>

<body class="lnb_bg">

<!-- wrap -->
<div class="wrap">

	<!-- header -->
	<div class="header">
		<div class="f_left cboth">
			<h1 class="logo"><a href="/admin/home"><img src="../img/bg/bg_logo.png" alt="KhmerPays"></a></h1>
		</div>
	</div>
	<!-- //header -->
	

	<!-- Container -->
	<div class="container">

		<!-- lnb box -->
		<div class="lnb_box">
			<!-- lnb top -->
			<div class="lnb_top">
				<!-- user view -->
				<div class="user_view cboth">
					<div class="user_r_side">
						<p class="icon_user">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
					</div>
				</div>
				<!-- //user view -->
			</div>
			<!-- //lnb top -->

			<!-- group wrap -->
			<div class="com_group_wrap">
				<!--company list -->
				<div class="com_list">
					<div class="com_list_box">
						<ul>
							<li class="{{ $class == 'home' ? 'on' : ''}}">
								<a href="{{URL::to('admin/home')}}">Home</a>
							</li>
							<li class="{{ $class == 'menu' ? 'on' : '' }}">
								<a href="{{URL::to('/admin/menu')}}">Menu</a>
							</li>
							<li class="{{ $class == 'menupost'? 'on' : '' }}">
								<a href="{{URL::to('/admin/menupost')}}">Menu Post</a>
							</li>
							<li class="{{ $class == 'procate' ? 'on' : '' }}">
								<a href="{{ URL::to( '/admin/procate') }}">Category</a>
							</li>
							<li class="{{ $class == 'product' ? 'on' : '' }}">
								<a href="{{ URL::to( '/admin/product') }}">Products</a>
							</li>
							<li class="{{ $class == 'user' ? 'on' : '' }}">
								<a href="{{URL::to('/admin/user')}}">Users</a>
							</li>
							<li class="{{ $class == 'setting' ? 'on' : '' }}">
								<a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							</li>
						</ul>
						<!--<ul>
							<li class="on"><a href="#none">Home</a></li>
							<li><a href="#none">Menu</a></li>
							<li><a href="#none">Banner Slide</a></li>
							<li><a href="#none">Services</a></li>
							<li><a href="#none">Users</a></li>
							<li><a href="#none">Log Out</a></li>
						</ul>-->
					</div>
				</div>
				<!--//company list -->
			</div>
			<!-- //group wrap -->
		</div>
		<!-- //lnb box -->

		<!-- content wrap -->
		<div class="content">
				
			<!-- content here -->
			@yield('content')
		</div>
		<!-- //content wrap -->
	</div>
	<!-- //Container -->

	<!-- alert confirm -->
	<div class="alert_confirm" style="display:none;">
		<div class="alert_inner">
			<div class="box">
				<h1 class="alert_tit">Confirmation</h1>
				<div class="alert_cnt">
					<p class="comfirm_text">Confirm Alert</p>
				</div>
			</div>
			<div class="btn_wrap tac">
				<a href="javascript:void(0)" class="btn_confirm", attrIdStore="">OK</a>
				<a href="javascript:void(0)" class="btn_cancel btn_cancel_confirm">Cancel</a>
			</div>
		</div>
	</div>
	<!-- //alert confirm -->

</div>
<!-- //wrap -->

<script type="text/javascript">
	$(document).ready(function(){

		// using tinymce
		tinymce.init({
		    selector: "textarea",
		    theme: "modern",
		    paste_data_images: false,
		    plugins: [
		      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		      "searchreplace wordcount visualblocks visualchars code fullscreen",
		      "insertdatetime media nonbreaking save table contextmenu directionality",
		      "emoticons template paste textcolor colorpicker textpattern"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    file_picker_callback: function(callback, value, meta) {
		      if (meta.filetype == 'image') {
		        $('#upload').trigger('click');
		        $('#upload').on('change', function() {
		          var file = this.files[0];
		          var reader = new FileReader();
		          reader.onload = function(e) {
		            callback(e.target.result, {
		              alt: ''
		            });
		          };
		          reader.readAsDataURL(file);
		        });
		      }
		    },
		    templates: [{
		      title: 'Test template 1',
		      content: 'Test 1'
		    }, {
		      title: 'Test template 2',
		      content: 'Test 2'
		    }]
		 });
	});
</script>



@stack('script')

</body>
</html>