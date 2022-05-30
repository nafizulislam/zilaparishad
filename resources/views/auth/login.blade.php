<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:title" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:description" content="Jobick : Job Admin Bootstrap 5 Template" />
	<meta property="og:image" content="https://jobick.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Zila Porishad</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}" />
    <link href="{{asset('vendor/css/style.css')}}" rel="stylesheet">
    <style>
        body {
            background-color: #0d9a08;
        }
        .btn-primary {
            border-color: #0d9a08;
            background-color: #0d9a08;
        }
    </style>
</head>

<body class="vh-100 bg-light" style="background:linear-gradient(0deg, #0d9a08d9, rgb(18 255 10 / 58%)),url({{asset('image/login_background.jpg')}});background-size:cover">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row  align-items-end">
                <div class="col-md-8 mb-5 ">
                    <h1 class="text-white fw-bold">চট্টগ্রাম জেলা পরিষদ</h1>
                    <h4 class="text-white fw-bold">হিসাব রক্ষকের আটোমেশন</h4>
                    <p class="text-white fw-bold mt-3">প্রাচ্যের রানী চট্টগ্রাম । চট্টগ্রাম বাংলাদেশের একটি গুরুত্বপূর্ণ জেলা  এবং প্রধান সমুদ্রবন্দর । অবস্থানগত কারণে চট্টগ্রাম বাংলাদেশের একটি বিশেষ শ্রেণীভুক্ত জেলা । পাহাড়, সমুদ্র, উপত্যকা, বন-বনানীর কারণে চট্টগ্রাম প্রাকৃতিক সৌন্দর্যের অন্যতম লীলাভূমি</p>
                </div>
                <div class="col-md-4">
                    <div class="authincation-content" style="height: 625px;width: 440px;background: #f4fdf4;">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="#"><img src="{{asset('image/login_logo.png')}}" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">লগিন করুন</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="আপনার ইমেইল দেন">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="আপনার ইমেইল দেন" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
                                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
													<label class="form-check-label" for="remember">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="mb-3">
                                            @if (Route::has('password.request'))
                                                <a  href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

	
</body>
</html>