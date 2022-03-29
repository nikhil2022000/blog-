<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="UniPro App">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>UniPro Login</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{url('design/css/bootstrap.min.css')}}">
		
		<!-- Main css -->
		<link rel="stylesheet" href="{{url('design/css/main.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

	</head>
	<body class="authentication">

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- *************
			************ Login container start *************
		************* -->
		<div class="login-container">

			<div class="container-fluid h-100">

			<!-- Row start -->
			<div class="row g-0 h-100">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="login-about">
						<div class="slogan">
							<span>Design</span>
							<span>Made</span>
							<span>Simple.</span>
						</div>
						<div class="about-desc">
							UniPro a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
						</div>
						<a href="crm.html" class="know-more">Know More <img src="{{url('design/img/right-arrow.svg')}}" alt="Uni Pro Admin"></a>

					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="login-wrapper">
                   
<form method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="login-screen">
								<div class="login-body">
									<a href="crm.html" class="login-logo">
										<img src="{{url('design/img/logo.svg')}}" alt="iChat">
									</a>
									<h6>Welcome back,<br>Please login to your account.</h6>
									<div class="field-wrapper">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										<div class="field-placeholder">Email ID</div>
									</div>
									<div class="field-wrapper mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 <div class="field-placeholder">Password</div>
									</div>
									<div class="actions">
										<a href="{{'reset'}}">Forgot password?</a>
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</div>
								<div class="login-footer">
									<span class="additional-link">No Account? <a href="signup.html" class="btn btn-light">Sign Up</a></span>
								</div>
							</div>
						</form>
</div>
                    
							</div>
				
					</div>
				</div>
			</div>
			<!-- Row end -->
		
			</div>
		</div>
		<!-- *************
			************ Login container end *************
		************* -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{url('design/js/jquery.min.js')}}"></script>
		<script src="{{url('design/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{url('design/js/modernizr.js')}}"></script>
		<script src="{{url('design/js/moment.js')}}"></script>
		
		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Main Js Required -->
		<script src="{{url('design/js/main.js')}}"></script>

	</body>
</html>