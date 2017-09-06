<!DOCTYPE html>
<html lang="ko" xml:lang="ko">
<head>
<title>Comfort</title>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="No-Cache">
<meta http-equiv="Pragma" content="No-Cache">
<link rel="stylesheet" href="{{asset('../font_awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('css/reset.css')}}">
<link rel="stylesheet" href="{{asset('ad_css/content.css')}}">
<script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('ad_js/common.js')}}"></script>

</head>

<body class="login_wrap">
<!-- wrap -->
<div class="wrap">
	<div class="login_wrap">
		<div class="login_inner">
			<h1>LOGIN</h1>
			<form method="POST" action="{{ route('login') }}">
				<div class="ipt_wrap">
					<ul>
						<li>
						
							
							<input id="email" type="email" class="form-control" style="width:100%;" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

						</li>
						<li>
	
							<input id="password" type="password" class="form-control" style="width:100%;" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</li>
						<li class="tar"><a href="#none" class="btn_forgot_pass">Forgot Password</a></li>
					</ul>
					<div class="tac">
						<a href="/admin/home" class="btn_login">LOGIN</a>
						<a href="/" class="btn_cancel">CANCEL</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>