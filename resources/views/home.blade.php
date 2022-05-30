

@extends('layouts.layouts')
@section('title')
Dashboard
@endsection

		 
		<!--**********************************
            Content body start
        ***********************************-->
   @section('content')
   <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">

					<!-- TAB -->

					<div class="col-xl-12">
						<h2 class="title">ড্যাশবাের্ড</h2>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						  	<li class="nav-item" role="presentation">
						    	<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">অর্থনৈতিক ভিত্তিক</button>
						  	</li>
						  	<li class="nav-item" role="presentation">
						    	<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">আয়/ব্যায় ভিত্তিক</button>
						  	</li>
						  	<li class="nav-item" role="presentation">
						    	<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">প্রকল্প ভিত্তিক</button>
						  	</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
						  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  		<div class="row">
						  			<div class="col-xl-12">

						  				<div class="date" id="absolute">
						  					<label for="cars">অর্থ বছর:</label>
						  					<select name="cars" id="cars">
						  					    <option value="volvo">২০২০-২১</option>
						  					    <option value="saab">২০২০-২১</option>
						  					    <option value="opel">২০২০-২১</option>
						  					    <option value="audi">২০২০-২১</option>
						  					</select>
						  				</div>

						  				<div class="row">
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মােট আয়</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মােট ব্যয়</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মােট লাভ</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মােট আনকেশড</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মােট স্থগিত</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-xl-6 mt-5">
						  				<div class="row">
						  					<div class="col-xl-12">
						  						<div class="card">
						  							<div class="card-body">

						  								<h5 class="title" >ব্যায়ের খাত সমূহ</h5>

						  								<div id="piechart1" style="width: 100%;"></div>
						  								<script type="text/javascript">
						  								  google.charts.load('current', {'packages':['corechart']});
						  								  google.charts.setOnLoadCallback(drawChart);

						  								  function drawChart() {

						  								    var data = google.visualization.arrayToDataTable([
						  								      ['Task', 'Hours per Day'],
						  								      ['লাইসেন্স ফি',     10],
						  								      ['পুকুর ও ফেরিঘাট',     30],
						  								      ['ভাড়া',  20],
						  								      ['এফ ডি আর', 60]
						  								    ]);

						  								    var options = {
						  								     // title: 'ব্যায়ের খাত সমূহ'
						  								    };

						  								    var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

						  								    chart.draw(data, options);
						  								  }
						  								</script>
				                                    </div>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-xl-6 mt-5">
						  				<div class="row">
						  					<div class="col-xl-12">
						  						<div class="card">
						  							<div class="card-body">

						  								<h5 class="title">আয়ের উৎস সমূহ</h5>
						  								<div id="piechart2" style="width: 100%;"></div>

						  								<script type="text/javascript">
						  								  google.charts.load('current', {'packages':['corechart']});
						  								  google.charts.setOnLoadCallback(drawChart);

						  								  function drawChart() {

						  								    
						  								    var data = google.visualization.arrayToDataTable([
						  								      ['Task', 'Hours per Day'],
						  								      ['বেতন ভাতা',     20],
						  								      ['উন্নয়নমুলক ব্যায়', 20],
						  								      ['নারী উন্নয়ন', 25],
						  								      ['জামানাত ফেরত',  10],
						  								      ['দুর্যোগ ও ত্রান', 25]
						  								    ]);

						  								    var options = {
						  								     // title: 'আয়ের উৎস সমূহ'
						  								    };

						  								    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

						  								    chart.draw(data, options);
						  								  }
						  								</script>
				                                    </div>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  		</div>	
						  	</div>
						  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						  		<div class="full-section">
						  			<div class="row">

						  				<div class="col-md-12">
						  					<div class="date" id="absolute">
						  						<label for="sal">অর্থ বছর:</label>
						  						<select name="" id="sal">
						  						    <option value="">২০২০-২১</option>
						  						    <option value="">২০২০-২১</option>
						  						    <option value="">২০২০-২১</option>
						  						    <option value="">২০২০-২১</option>
						  						</select>
						  						<label for="mas">মাস:</label>
						  						<select name="" id="mas">
						  						    <option value="">জানুয়ারী ২০২১</option>
						  						    <option value="">জানুয়ারী ২০২১</option>
						  						    <option value="">জানুয়ারী ২০২১</option>
						  						</select>
						  					</div>
						  				</div>

						  			</div>
						  			<div class="row">
						  				<div class="col-xl-4">
						  					<div class="s-box">
						  						<h5>ভাড়া</h5>

						  						<h6>গত মাসের জুন ২০২১</h6>
						  						<span>৫,০০,০০,০০০ সংগৃহীত</span>
						  						<h6>বর্তমান মাসের জুলাই ২০২১</h6>
						  						<span>৫,০০,০০,০০০ সংগৃহীত</span>
						  					</div>
						  				</div>
						  				<div class="col-xl-4">
						  					<div class="s-box">
						  						<h5>ভাড়া</h5>

						  						<h6>গত মাসের জুন ২০২১</h6>
						  						<span>৫,০০,০০,০০০ সংগৃহীত</span>
						  						<h6>বর্তমান মাসের জুলাই ২০২১</h6>
						  						<span>৫,০০,০০,০০০ সংগৃহীত</span>
						  					</div>
						  				</div>
						  				<div class="col-xl-2">
						  					<div class="col-box">
					  							<i class="far fa-clone"></i>
					  							<h4>মােট ভাড়াটিয়া</h4>
					  							<span>&#2547; 20000</span>
					  						</div>
						  				</div>
	  					  				<div class="col-xl-2">
	  					  					<div class="col-box">
	  				  							<i class="far fa-clone"></i>
	  				  							<h4>মােট ইজারাদার</h4>
	  				  							<span>&#2547; 5000</span>
	  				  						</div>
	  					  				</div>
						  			</div>

						  			<div class="row">
						  				<div class="col-xl-4">
						  					<div class="b-box" style="background: #188fad;">
						  						<h5>ভাড়াটিয়া</h5>
						  						<div class="row">
						  							<div class="col-xl-9">
						  								<h6>মােট বকেয়া ভাড়া ছিলঃ ১০,৫০,০০০/-</h6>
						  								<h6>সংগৃহীত হয়েছেঃ ৫,৫০,০০০/-</h6>
						  								<h6>অবশিষ্ট আছেঃ ৫,০০,০০০/-</h6>
						  							</div>
						  							<div class="col-xl-3">
						  								<div id="donut">৯০%</div>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
	  					  				<div class="col-xl-4">
	  					  					<div class="b-box" style="background: #04a596;">
	  					  						<h5>ভাড়াটিয়া</h5>
	  					  						<div class="row">
	  					  							<div class="col-xl-9">
	  					  								<h6>মােট বকেয়া ভাড়া ছিলঃ ১০,৫০,০০০/-</h6>
	  					  								<h6>সংগৃহীত হয়েছেঃ ৫,৫০,০০০/-</h6>
	  					  								<h6>অবশিষ্ট আছেঃ ৫,০০,০০০/-</h6>
	  					  							</div>
	  					  							<div class="col-xl-3">
	  					  								<div id="donut">৯০%</div>
	  					  							</div>
	  					  						</div>
	  					  					</div>
	  					  				</div>
	  					  				<div class="col-xl-4">
	  					  					<div class="b-box" style="background: #775ca3;">
	  					  						<h5>ভাড়াটিয়া</h5>
	  					  						<div class="row">
	  					  							<div class="col-xl-9">
	  					  								<h6>মােট বকেয়া ভাড়া ছিলঃ ১০,৫০,০০০/-</h6>
	  					  								<h6>সংগৃহীত হয়েছেঃ ৫,৫০,০০০/-</h6>
	  					  								<h6>অবশিষ্ট আছেঃ ৫,০০,০০০/-</h6>
	  					  							</div>
	  					  							<div class="col-xl-3">
	  					  								<div id="donut">৯০%</div>
	  					  							</div>
	  					  						</div>
	  					  					</div>
	  					  				</div>
						  			</div>

						  			<div class="row">
						  				<div class="col-xl-12">
						  					<div class="row">
						  						<div class="col-xl-6">
						  							<h2 class="title">জুন ২০২১ মাসের লেনদেন</h2>
						  						</div>
						  						<div class="col-xl-6">
						  							<a href="#" class="button">বিল পরিশােধ</a>
						  						</div>
						  					</div>
		  					  				<div class="list">
		  					  					<div class="table-responsive">
		  											<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
		  												<thead>
		  													<tr>
		  														<th>
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="checkAll4">
		  															  <label class="form-check-label" for="checkAll4">
		  															  </label>
		  															</div>  
		  														</th>
		  														<th>নাম</th>
		  														<th>প্রকল্পের নাম</th>
		  														<th>প্রকল্পিত মূল্য</th>
		  														<th>চেক গ্রহনের মূল্য</th>
		  														<th>চেক নং এবং গ্রহনের তারিখ</th>
		  														<th>বর্তমান অবস্থা</th>
		  														<th>এ্যাকশন</th>
		  														<th></th>
		  													</tr>
		  												</thead>
		  												
		  												<tbody>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  													<tr>
		  														<td class="tbl-bx">
		  															<div class="form-check ms-2">
		  															  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
		  															  <label class="form-check-label" for="customCheckBox">
		  															  </label>
		  															</div>
		  														</td>
		  														<td class="wspace-no">
		  															<span class="fs-16">
		  																<svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
		  																  <g  transform="translate(0.243)">
		  																	<rect  width="53" height="53" rx="12" transform="translate(-0.243)" fill="#c5c5c5"/>
		  																	<g  transform="translate(-0.243)">
		  																	  <rect  data-name="placeholder" width="53" height="53" rx="12" fill="#2769ee"/>
		  																	  <ellipse  data-name="Ellipse 12" cx="13.243" cy="13.43" rx="13.243" ry="13.43" transform="translate(11.152 14.922)" fill="#fff"/>
		  																	  <ellipse  data-name="Ellipse 11" cx="8.016" cy="8.207" rx="8.016" ry="8.207" transform="translate(27.183 11.191)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
		  																	</g>
		  																  </g>
		  																</svg>
		  																<ul class="d-inline-block">
		  																	<li>আব্দুল হাসান</li>
		  																	<li>01978250856</li>
		  																</ul>
		  															</span>
		  														</td>
		  														<td>আধুনগর মাস্তার ফরিদ আহমদ সড়ক আরসিসি দ্বারা উন্নয়ন (আধুনগর বাস...</td>
		  														<td class="wspace-no">১২,০০০/-</td>
		  														
		  														<td>১০,০০০</td>
		  														<td>
		  															<ul>
		  																<li>355550293028</li>
		  																<li>২১/১০/২০২১</li>
		  															</ul>
		  														</td>
		  														<td class="wspace-no">
		  															চেক প্রদান করা হয়েছে
		  														</td>
		  													
		  														<td><span class="btn btn-outline light  border-light btn-sm"><i class="fas fa-pen"></i></span></td>
		  														<td>
		  															<div class="dropdown text-end">
		  																<div class="btn-link" data-bs-toggle="dropdown" >
		  																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		  																		<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																		<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		  																	</svg>
		  																</div>
		  																<div class="dropdown-menu dropdown-menu-right">
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
		  																	<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
		  																</div>
		  															</div>
		  														</td>
		  													</tr>
		  												</tbody>	
		  											</table>	
		  										</div>
		  					  				</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						  		<div class="row">
						  			<div class="col-xl-12">

						  				<div class="date" id="absolute">
						  					<label for="cars">অর্থ বছর:</label>
						  					<select name="cars" id="cars">
						  					    <option value="volvo">২০২০-২১</option>
						  					    <option value="saab">২০২০-২১</option>
						  					    <option value="opel">২০২০-২১</option>
						  					    <option value="audi">২০২০-২১</option>
						  					</select>
						  				</div>

						  				<div class="row">
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট প্রকল্প</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট পি আই সি প্রকল্প</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট দরপত্র কৃত প্রকল্প</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট চলমান প্রকল্প</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট সমাপ্ত প্রকল্প</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-xl-12 pt-5">
						  				<div class="row">
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট পি আই সি হোল্ডার</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  						<div class="col-box">
						  							<i class="far fa-clone"></i>
						  							<h4>মোট ঠিকাদার</h4>
						  							<span>&#2547; 5,00,00,000</span>
						  						</div>
						  					</div>
						  					<div class="col">
						  					</div>
						  					<div class="col">
						  					</div>
						  					<div class="col">
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>

				

            </div>
        </div>
		
    @endsection
        <!--**********************************
            Content body end
        ***********************************-->
		

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->