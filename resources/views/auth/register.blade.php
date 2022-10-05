<!doctype html>
<html lang="en">
  <head>
  	<title>Halaman Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('css2/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Silakan Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<body class="img js-fullheight" style="background-image: url(images2/asd.jpg);">
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Daftar dulu ya</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
		      		<div class="form-group">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="username" required>
		      		</div>
	            <div class="form-group">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
	              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email" required>
	            </div>
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password" required>
              </div>
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn form-control btn-primary rounded submit px-3">Get Started</button>
            </div>
              </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">Don't have an account?</p>
		          <a href="#">Sign Up</a>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('js2/jquery.min.js')}}"></script>
  <script src="{{asset('js2/popper.js')}}"></script>
  <script src="{{asset('js2/bootstrap.min.js')}}"></script>
  <script src="{{asset('js2/main.js')}}"></script>
</body>
	</body>
</html>
