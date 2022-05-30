

@extends('layouts.layouts')

@push('css')

@endpush
@section('title')
Dashboard
@endsection


@section('content')
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">

					<!-- TAB -->

					<div class="col-xl-12">
						<h2 class="title">প্রকল্প</h2>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
							  <a href="{{ route('project.index') }}" class="nav-link  ">পি আই সি প্রকল্প </a>
						    	<!-- <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">পি আই সি হােল্ডার </button> -->
						  	</li>
						  	<li class="nav-item" role="presentation">
								  <a href="{{ route('package.index') }}" class="nav-link ">দরপত্রকৃত প্যাকেজ</a>
						    	<!-- <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ঠিকাদার</button> -->
						  	</li>
						  	<li class="nav-item" role="presentation">
							  <a href="{{ route('rate.index') }} " class="nav-link active">রেট নির্ধারণ</a>
						    	<!-- <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ভাড়াটিয়া, ইজারাদার</button> -->
						  	</li>
                              <li class="nav-item" role="presentation">
                                <a href="{{ route('sarok.index') }}" class="nav-link">মন্ত্রনালয়ের স্মারক নম্বর</a>
                                <!-- <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ভাড়াটিয়া, ইজারাদার</button> -->
                            </li>
						</ul>

						{{-- new add --}}
        <hr style="margin-top: -15px;">


        <div class="d-flex justify-content-between">

            <h3>
                <i class="fa fa-address-book" aria-hidden="true" style="margin-right:10px"></i>

			রেট নির্ধারণের তালিকা
            </h3>
            <form>
                  <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="এখানে সার্চ করুন ...">
                        </div>
                        <div class="col">
                            <select id="inputState" class="default-select form-control wide" style="">
                                <option selected="">প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                            </select>
                        </div>
                        <div class="col">
                            <select id="inputState" class="default-select form-control wide" style="">
                                <option selected="">প্রকল্প গ্রহণকারীর</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                            </select>
                        </div>

                        <div class="col">
                            <select id="inputState" class="default-select form-control wide" style="">
                                <option selected="">বর্তমান অবস্থা</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                                <option>প্রকল্প সমূহ</option>
                            </select>
                        </div>
                    </div>
            </form>
        </div>
        {{-- new add --}}

						<div class="tab-content" id="pills-tabContent">

						  	<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  		  		<div class="row">
									<div class="col-xl-12">
								  <div class="d-flex btn-margin" style="    float: right;">
									<h3 style="margin-right: 20px;">অর্থবছর</h3>

									<form style="width: 150px;">
										<select class="default-select form-control wide mb-3 w-100" style="display: none;width: 100px;">
											<option>2020-21</option>

										</select>
                                    </form>
									<button style="width: 200px; margin-left:20px;height: 40px;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#thikader">রেট সংযোগ</button>
									<div class="modal fade" id="thikader">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">রেট সংযোগ করুন</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
													<div class="basic-form">
														<form method="POST" action="{{route('rate.store')}}" enctype="multipart/form-data">
														@csrf
															<div class="row">
                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">প্রকল্পের আইডি</label>
																	<input type="text"name="prokolper_no" class="form-control" placeholder="egp/zp-ctg/own/2018-2019/w19">
																</div>
                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">টেন্ডার আইডি</label>
																	<input type="text"name="tener_no" class="form-control" placeholder="35019">
																</div>
                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">অর্থ বছর</label>
																	<select class="default-select form-control wide mb-3 w-100" name="year" style="display: none;width: 100px;">
																		<option value="2021-2022">2021-2022</option>
																		<option value="2022-2023">2022-2023</option>

																	</select>
																</div>
															    <div class="mb-3 col-md-4">
																	<label class="form-label">নথি নম্বর</label>
																	<input type="text"name="nothi_no" class="form-control" placeholder="22/2019-2020">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">সাংগ্রহিক নম্বর</label>
																	<input type="text"name="shangrahik_no" class="form-control" placeholder="IV">
																</div>

                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">তারিখ</label>
																	<input type="date" name="date" class="form-control" placeholder="IV">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">তহবিল</label>
																	<select class="default-select form-control wide mb-3 w-100" name="tahabil" style="display: none;width: 100px;">
																		<option>নিজস্ব তহবিল</option>
																		<option>অনুদান</option>

																	</select>
																</div>

                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">নোটিশ নং</label>
																	<input type="text"name="notice" class="form-control">
																</div>
                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">গ্রুপ নং</label>
																	<input type="text"name="group_no" class="form-control">
																</div>

                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">প্রকল্পের বরাদ্ধ (লক্ষ টাকা)</label>
																	<input type="text"name="amount" class="form-control">
																</div>



																<div class="mb-3 col-md-4">
																	<label class="form-label">ওয়ার্ড নং</label>
																	<input type="text" name="word_no" class="form-control" placeholder="০৮">
																</div>

                                                                <div class="mb-3 col-md-4">
																	<label class="form-label">উপজেলা</label>
																	<select class="default-select form-control wide mb-3 w-100" name="upozila_id" style="display: none;width: 100px;">
																		<option value="পটিয়া">পটিয়া</option>
																		<option value="আনোয়ারা">আনোয়ারা</option>

																	</select>
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">কাজের প্রকৃতি</label>
																	<select class="default-select form-control wide mb-3 w-100" name="kajer_prokity" style="display: none;width: 100px;">
																		<option>সড়ক উন্নয়ন</option>
																		<option>ড্রেনেজ</option>

																	</select>
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">প্রকল্পের নোটিশ</label>
																	<input type="text" name="project_notice" class="form-control" placeholder="নোটিশ ফাইলটি দেখুন">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">প্রকল্পের রেট</label>
																	<input type="text" name="prokolper_rate" class="form-control" placeholder="প্রকল্পের রেট ফাইলটি দেখুন">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">প্রকল্পের লিস্ট</label>
																	<input type="text" name="prokolper_list" class="form-control" placeholder="প্রকল্পের লিস্ট ফাইলটি দেখুন">
																</div>

															</div>

															<div class="text-center">
																<button type="submit" class="btn btn-success">সংযোগ করুন</button>
															</div>

														</form>
													</div>

												</div>

                                            </div>
                                        </div>
                                    </div>

								</div>
									</div>
				  		  			<div class="col-xl-12 mt-3">
				  		  				<div class="list">
				  		  					<div class="table-responsive">
				  								<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="example">
				  									<thead class="table-head">

				  										<tr>
				  											<th>প্রকল্পের আইডি</th>
				  											<th>টেন্ডার আইডি</th>
				  											<th>উপজেলা</th>
				  											<th>বরাদ্ধ (লক্ষ টাকা)</th>
				  											<th>বিজয়ী দরদাতা</th>
				  											<th>প্রথম চেক</th>
				  											<th>দ্বিতীয় চেক</th>
				  											<th>বর্তমান অবস্থা</th>
				  											<th>এ্যাকশন</th>
				  										</tr>
				  									</thead>

				  									<tbody>
                                                    @foreach($project as $row)
				  										<tr>
				  											<td class="wspace-no">
				  												<span class="fs-16">
				  													<ul class="d-inline-block">
				  														<li>{{$row->prokolper_no}}</li>
				  													</ul>
				  												</span>
				  											</td>
				  											<td>{{$row->tener_no}}</td>

				  											<td class="wspace-no">
				  												{{ $row->upozila_id }}
				  											</td>

															  <td class="wspace-no">
				  												{{ $row->amount }}
				  											</td>

															  <td class="wspace-no">
                                                              {{ $row->org }}
				  											</td>

															<td class="wspace-no">
															  12-02-2022

				  											</td>

                                                              <td class="wspace-no">
															  12-02-2022

				  											</td>

															<td class="wspace-no">
				  												চেক প্রদান করা হয়েছে
				  											</td>

				  											<td class="d-flex">

																<span class="btn btn-outline light  border-light btn-sm " style="margin-right:5px"><i class="fas fa-pen"></i></span>

																<form action="#" method="POST">

																@csrf
                    											@method('DELETE')
																<button type="submit" class="btn btn-danger"><i class="fas fa-eraser" ></i></button>

															</td>
				  										</tr>
                                                    @endforeach


				  									</tbody>
				  								</table>
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

    @push('js')
    @endpush
