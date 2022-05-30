<!DOCTYPE html>
<html lang="en">
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- PAGE TITLE HERE -->
	<title>@yield('title') | Chattogram Zila Porishad </title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	<link href="{{asset('admin/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Style css -->
	@stack('css')
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/css/custom.css')}}" rel="stylesheet">

    {{-- toaster cdn start here --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- toaster cdn end here --}}

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

  		<!--**********************************
            Header start
        ***********************************-->

        <div class="header">
            <div class="header-content">
    
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="nav-item d-flex align-items-center">
                            <h3>জেলা পরিষদ চট্টগ্রাম</h3>
								<div class="input-group search-area">
                                
									<input type="text" class="form-control" placeholder="">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">


							<li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{asset('vendor/images/profile/1.png')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>




         @include('partials.sidebar')



        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('partials.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('admin//js/plugins-init/datatables.init.js')}}"></script>
	<!-- Apex Chart -->
	<script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>

	<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('admin/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>

	<script src="{{asset('admin/vendor/owl-carousel/owl.carousel.js')}}"></script>

    <script src="{{asset('admin/js/custom.min.js')}}"></script>
	<script src="{{asset('admin/js/dlabnav-init.js')}}"></script>


    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>



    <script>
     $(document).on("click", "#delete", function(e){
         e.preventDefault();
         var link = $(this).attr("action");
         swal({
             title: "Are you Want to delete?",
             text: "Once Delete, This will be Permanently Delete!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
             if (willDelete) {
                 window.location.href = link;
             } else {
             swal("Safe Data!");
             }
         });
     });
 </script>

	<script>
		function JobickCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:30,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					autoWidth:true,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['', ''],
					responsive:{
						0:{
							items:1
						},

						480:{
							items:1
						},

						767:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					JobickCarousel();
				}, 1000);
			});
	</script>
    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>
	@stack('js')
</body>
</html>
