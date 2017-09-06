<!DOCTYPE html>
<html lang="ko" class="leaf">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>COMFORD</title>
<link rel="stylesheet" type="text/css" href="/css/reset.css">
<link rel="stylesheet" type="text/css" href="/css/content.css">
<link rel="stylesheet" type="text/css" href="/css/content_tablet.css">
<link rel="stylesheet" type="text/css" href="/css/content_phone.css">
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/slide_slick.js"></script>
<script type="text/javascript" src="/js/khmerpay.js"></script>
</head>

<body>

<!-- wrap -->
<div class="wrap">
	<!-- tob_bar -->
	<div class="top_bar">
		<div class="inner">
			<div class="frt">
				<ul>
					<li><a href="#none"><img src="/img/icon/ico_tob_bar_facebook.png" alt=""></a></li>
					<li><a href="#none"><img src="/img/icon/ico_tob_bar_twitter.png" alt=""></a></li>
					<li><a href="#none"><img src="/img/icon/ico_tob_bar_wechat.png" alt=""></a></li>
					 @if (Auth::guest())
                        <li style="margin-left:15px;"><a href="{{ route('login') }}" style="color:#777;">Login</a></li>
                        @else
                            
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" style="color:#777;">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                      
                        @endif






				</ul>
			</div>
		</div>
	</div>
	<!-- //tob_bar -->
	
	<!-- header -->
	<div class="header">
		<!-- inner -->
		<div class="inner">
			<!-- logo -->
			<div class="logo">
				<h1><a href="/"><img src="/img/bg/bg_logo.png" alt="COMFORD"></a></h1>
			</div>
			<!-- //logo -->
		</div>
		<!-- //inner -->
	</div>
	<!-- //header -->

	<hr>

	<!-- container -->
	<div class="container">
		<!-- slide_wrap(index) -->
		<div class="slide_wrap_index">
			<!-- slide_inner -->
			<div class="slide_container_index">
				<!-- slide_01 -->
				<div class="slide_index slide_01">
					<div class="slide_inner_index">
						<div class="slide_tit_wrap">
							<h2 class="slide_tit_h2">
								무증빙
								<span>경비지출 서비스</span>
							</h2>
						</div>
						<div class="slide_desc">
							<p>
								스마트폰에 영수증을 담았을 뿐인데<br class="br_desc_mobile">
								<span>회사의 경비관리가 너무나<br class="br_desc_mobile"> 편리해졌습니다.</span>
							</p>
						</div>
					</div>
				</div>
				<!-- //slide_01 -->

				<!-- slide_02 -->
				<div class="slide_index slide_02">
					<div class="slide_inner_index">
						<div class="slide_tit_wrap">
							<h2 class="slide_tit_h2">
								투명한
								<span>경비지출 서비스</span>
							</h2>
						</div>
						<div class="slide_desc">
							<p>
								직원들의 영수증이 매일 아침<br class="br_desc_mobile"> 나의 PC로 배달되어
								<span>사용현황을<br class="br_desc_mobile"> 한 눈에 확인하고 실시간으로 지출승인까지!</span>
							</p>
						</div>
					</div>
				</div>
				<!-- //slide_02 -->
				
				<!-- slide_01 -->
				<div class="slide_index slide_01">
					<div class="slide_inner_index">
						<div class="slide_tit_wrap">
							<h2 class="slide_tit_h2">
								무증빙
								<span>경비지출 서비스</span>
							</h2>
						</div>
						<div class="slide_desc">
							<p>
								스마트폰에 영수증을 담았을 뿐인데<br class="br_desc_mobile">
								<span>회사의 경비관리가 너무나<br class="br_desc_mobile"> 편리해졌습니다.</span>
							</p>
						</div>
					</div>
				</div>
				<!-- //slide_01 -->
				
				<!-- slide_02 -->
				<div class="slide_index slide_02">
					<div class="slide_inner_index">
						<div class="slide_tit_wrap">
							<h2 class="slide_tit_h2">
								투명한
								<span>경비지출 서비스</span>
							</h2>
						</div>
						<div class="slide_desc">
							<p>
								직원들의 영수증이 매일 아침<br class="br_desc_mobile"> 나의 PC로 배달되어
								<span>사용현황을<br class="br_desc_mobile"> 한 눈에 확인하고 실시간으로 지출승인까지!</span>
							</p>
						</div>
					</div>
				</div>
				<!-- //slide_02 -->
				
				
			</div>
			<!-- //slide_inner -->
		</div>
		<!-- //slide_wrap(index) -->

		<!-- menu_wrap -->
		<div class="menu_wrap">
			<div class="inner">

				<ul>
					@foreach($menulist as $menu)
						<li><a href="/{{$menu->id}}">{{$menu->menuname}}</a>
							@php
								$Id=$menu->id;
							@endphp

							@if($Id=='4')
								<ul class="subcate">
									@foreach($category as $categories)
										<li><a href="/sub/{{$categories->id}}/{{$categories->id}}">{{$categories->subcate_name}}</a></li>
									@endforeach
								</ul>
							@endif
						</li>
					@endforeach
					<li>
						<div class="search_box">
							<label><input type="text" style="width:;" placeholder="Search" value=""></label>
							<a href="#none" class="btn_search"><span class="blind">search</span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //menu_wrap -->

		<!-- content_wrap -->
		<div class="content_wrap">
			<div class="inner">
				@yield('content')
			</div>
		</div>
		<!-- //content_wrap -->
	</div>
	<!-- //container -->
	<hr>

	<div class="sponsore">
		<div class="sponsore_inner">
			<marquee direction="right" scrollamount="5">
				<ul>
					<li><div><img src="/img/sponsor/1.jpg" alt="1"></div></li>
					<li><div><img src="/img/sponsor/1.jpg" alt="1"></div></li>
					<li><div><img src="/img/sponsor/1.jpg" alt="1"></div></li>
					<li><div><img src="/img/sponsor/1.jpg" alt="1"></div></li>
					<li><div><img src="/img/sponsor/1.jpg" alt="1"></div></li>
				</ul>
			</marquee>
			
		</div>
	</div>

	<div class="sponsore">
		<div class="sponsore_inner">
			<img src="/img/sponsor/bottom_sponsor.png" alt="" style="width:100%;">
		</div>
	</div>

	<!-- botton_gotoTop -->
	<a href="#none" class="btn_gotoTop"><span class="blind">go to Top</span></a>
	<!-- //botton_gotoTop -->
	
	<div class="footer">
		<div class="inner">
			<ul>
				<li>
					<dl>
						<dt>Social Media</dt>
						<dd>
							<iframe src="//www.facebook.com/plugins/likebox.php?
							href=https://www.facebook.com/1675893282632792&amp;width=290&amp;height=250&amp;
							amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;" style="border:none;height:270px;overflow:hidden;width:290px;">
							</iframe>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>Address</dt>
						<dd>
							Office Hour:	Monday-Friday from 08:00 to 17:30 <br>
							Address:	No. 10, St. 598, Boeng Kak II, Tuol Kork, Phnom Penh, Cambodia<br>
							Telephone:	+(855)23 900 530<br>
							Fax:	+(855)23 900 531<br>
							Facebook:	www.facebook.com/kosigncambodia<br>
							Twitter:	www.twitter.com/kosigncambodia<br>
							Kakao:	plus.kakao.com/home/@kosign
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>Map Address</dt>
						<dd>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.648786779566!2d104.88577241440778!3d11.577016091781342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109519cc04d0dbf%3A0x909676914d0bddfb!2sKosign+Cambodia+Investment+Co.+ltd!5e0!3m2!1sen!2skh!4v1502714681800" width="600" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
						</dd>
					</dl>
				</li>
			</ul>
		</div>		
	</div>

</div>
<!-- //wrap -->

<script type="text/javascript">
$(document).ready(function(){
	$('.slide_container_index').slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
	});
});
</script>
</body>
</html>