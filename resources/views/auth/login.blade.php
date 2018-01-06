<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IDStack Project">
    <meta name="author" content="Hakim">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon_1.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}"></script>
    <![endif]-->

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>

		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Login to <strong class="text-custom">{{ config('app.name', 'Laravel') }}</strong></h3>
				</div>

				<div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email or Username" required autofocus>
                          @if ($errors->has('email'))
                              <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                          @endif
                      </div>
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="form-group ">
                      <div class="col-xs-12">
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                          @if ($errors->has('email'))
                              <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                          @endif
                      </div>
                  </div>
              </div>

              <div class="form-group ">
                  <div class="col-xs-12">
                      <div class="checkbox checkbox-primary">
                          <input id="checkbox-signup" type="checkbox" name="remember">
                          <label for="checkbox-signup"> Remember me </label>
                      </div>

                  </div>
              </div>

              <div class="form-group text-center m-t-40">
                  <div class="col-xs-12">
                      <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light" type="submit">
                          Log In
                      </button>
                  </div>
              </div>

              <div class="form-group m-t-20 m-b-0">
                  <div class="col-sm-12">
                      <a href="{{ route('password.request') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                  </div>
              </div>

          </form>

				</div>
			</div>
		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>


        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

	</body>
</html>
