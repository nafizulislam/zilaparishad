

@extends('layouts.layouts')

@push('css')

@endpush
@section('title')
ঠিকাদার
@endsection


@section('content')
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">

					<!-- TAB -->

					<div class="col-xl-12">
						<h2 class="title">ক্লাইন্ট</h2>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
							  <a href="{{ route('client.index') }}" class="nav-link  ">পি আই সি হােল্ডার </a>
						    	<!-- <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">পি আই সি হােল্ডার </button> -->
						  	</li>
						  	<li class="nav-item" role="presentation">
								  <a href="{{ route('thikadar.index') }}" class="nav-link active">ঠিকাদার</a>
						    	<!-- <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ঠিকাদার</button> -->
						  	</li>
						  	<li class="nav-item" role="presentation">
							  <a href="{{ route('varatia.index') }}" class="nav-link">ভাড়াটিয়া, ইজারাদার</a>
						    	<!-- <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ভাড়াটিয়া, ইজারাদার</button> -->
						  	</li>
						</ul>

						{{-- new add --}}
        <hr style="margin-top: -15px;">


        <div class="d-flex justify-content-between">

            <h3>
                <i class="fa fa-address-book" aria-hidden="true" style="margin-right:10px"></i>
                 ঠিকাদারের তালিকা
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
									<button style="width: 200px; margin-left:20px;height: 40px;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#thikader">নতুন সংযোগ</button>
									<div class="modal fade" id="thikader">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title"> <i class="fa fa-address-book" aria-hidden="true" style="margin-right:10px"></i>নতুন ঠিকাদার তালিকা ভুক্ত করুন</h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
													<div class="basic-form">
														<form method="POST" action="{{route('thikadar.store')}}" enctype="multipart/form-data">
														@csrf
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label class="form-label">মালিকের  নাম</label>
																	<input type="text"name="owner_name" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">মালিকের মোবাইল নম্বর</label>
																	<input type="text" name="owner_phone" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">মালিকের এনআইডি নাম্বার</label>
																	<input type="text" name="owner_nid" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label>ছবি</label>
																	<input type="file" name="photo" class="form-file-input form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">বর্তমান ঠিকানা</label>
																	<input type="text" name="present_address" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">স্থায়ী ঠিকানা</label>
																	<input type="text" name="permanent_address" class="form-control">
																</div>
															</div>
															<div class="row">
																<div class="mb-3 col-md-4">
																	<label class="form-label">প্রতিষ্ঠানের  নাম</label>
																	<input type="text" name="org_name" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">প্রতিষ্ঠানের ঠিকানা</label>
																	<input type="text" name="org_address" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">লাইসেন্স শ্রেনী</label>
																	<select class="default-select form-control wide mb-3 w-100" name="license" style="display: none;width: 100px;">
																		<option>১ম শ্রেনী</option>
																		<option>২য় শ্রেনী</option>

																	</select>
																</div>
																<div class="mb-3 col-md-4">
																	<label>ব্যাংকের নাম</label>
																	<input type="text" name="bank_name" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">একাউন্ট নম্বর</label>
																	<input type="text" name="bank_account" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label class="form-label">ব্যাংকের শাখা</label>
																	<input type="text" name="branch" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label>লাইসেন্সের তারিখ</label>
																	<input type="date" name="license_date" class="form-file-input form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label>স্মারক নম্বর</label>
																	<input type="text" name="sarok_no" class="form-control">
																</div>
																<div class="mb-3 col-md-4">
																	<label>প্রয়োজনীয় ডকুমেন্ট</label>
																	<input type="file" name="documents" class="form-control">
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
				  		  			<div class="col-xl-12  mt-3">
				  		  				<div class="list">
				  		  					<div class="table-responsive">
				  								<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="example">
				  									<thead class="table-head">

				  										<tr>
				  											{{-- <th>
				  												<div class="form-check ms-2">
				  												  <input class="form-check-input" type="checkbox" value="" id="checkAll4">
				  												  <label class="form-check-label" for="checkAll4">
				  												  </label>
				  												</div>
				  											</th> --}}
				  											<th>নাম</th>
				  											<th>প্রতিষ্ঠানের নাম</th>
				  											<th>প্যাকেজ কোড</th>
				  											<th>প্রথম চেক গ্রহনের তারিখ</th>
				  											<th>দ্বিতীয় চেক গ্রহনের তারিখ</th>
				  											<th>বর্তমান অবস্থা</th>
				  											<th>এ্যাকশন</th>
				  										</tr>
				  									</thead>

				  									<tbody>
                                                      @foreach($thikadar as $row)
				  										<tr>
				  											{{-- <td class="tbl-bx">
				  												<div class="form-check ms-2">
				  												  <input class="form-check-input" type="checkbox" value="" id="customCheckBox">
				  												  <label class="form-check-label" for="customCheckBox">
				  												  </label>
				  												</div>
				  											</td> --}}
				  											<td class="wspace-no">
				  												<span class="fs-16">
                                                                  <img src="{{asset('image')}}/{{$row->photo}}" style="width:50px">
				  													<ul class="d-inline-block">
                                                                    <li>
                                                                        <a class="infoBtn" type="button" data-id="{{ $row->id }}" data-bs-toggle="modal" data-bs-target="#personalModal">{{$row->owner_name}}</a>
                                                                    </li>
				  														{{-- <li>{{$row->owner_name}}</li> --}}
				  														<li>{{$row->owner_phone}}</li>
				  													</ul>
				  												</span>
				  											</td>
				  											<td>{{$row->org_name}}</td>
				  											<td class="wspace-no">egp/tender/123011</td>

				  											<td>২১/১০/২০২১</td>
				  											<td>
				  												<ul>

				  													<li>২১/১০/২০২১</li>
				  												</ul>
				  											</td>
				  											<td class="wspace-no">
				  												চেক প্রদান করা হয়েছে
				  											</td>

				  									    	<td class="d-flex">

																<span class="btn btn-outline light  border-light btn-sm " style="margin-right:5px">
                                                                    <a class="editPicModal"  type="button" data-bs-target="#editModal" data-id="{{ $row->id }}" data-bs-toggle="modal"><i class="fas fa-pen"></i></a>
                                                                </span>
																<form action="{{ route('thikadar.delete',$row->id) }}" id="delete" method="POST">

																@csrf
                    											@method('DELETE')
																<button type="submit" class="btn btn-danger" ><i class="fas fa-eraser" ></i></button>
                                                                </form>
															</td>
				  										</tr>
                                                    @endforeach

				  									</tbody>
				  								</table>


                                                  <div class="modal fade" id="editModal">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                      <div class="modal-content" style="background: #f7fdf7;">
                                                        <div class="modal-header" style="border:none">
                                                          {{-- <h5 class="modal-title">নতুন পিআইসি হোল্ডার তালিকা ভুক্ত করুন</h5> --}}
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <div class="row">
                                                            <div class="col-xl-12" style="    background: #fff;">
                                                              <div class="tab-content custom-content">
                                                                <div id="v-pills-home" class="tab-pane fade active show">
                                                                  <div class="basic-form">
                                                                    <h3 class="mb-5">
                                                                      <i class="fa fa-address-book " style="margin-right: 7px;"></i>  ঠিকাদারের তথ্য সংশোধন
                                                                    </h3>
                                                                    <form id="insert_form" method="post" action="" enctype="multipart/form-data">
                                                                      @csrf
                                                                      <div class="row">
                                                                          <input type="hidden" name="thikadar_update_id" id="thikadar_id">
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">মালিকের নাম</label>
                                                                          {{-- <p id="pic_name"></p> --}}
                                                                          <input type="text" name="owner_name" class="form-control" id="edit_owner_name">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">মালিকের মোবাইল নম্বর</label>
                                                                          <input type="text" name="owner_phone" class="form-control" id="edit_owner_phone">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">মালিকের এনআইডি নাম্বার</label>
                                                                          <input type="text" id="edit_owner_nid" name="owner_nid" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label>ছবি</label>
                                                                          <div id="" class="mr-2" style="margin-right: 10px;">
                                                                            <img id="edit_owner_photo" width="100" height="60">
                                                                          </div>

                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label>নতুন ছবি আপলোড করুন </label>
                                                                          <input type="file" id="new_thikadar_photo" name="photo" class="form-file-input form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">বর্তমান ঠিকানা</label>
                                                                          <input type="text" name="present_address"  id="edit_present_address" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">স্থায়ী ঠিকানা</label>
                                                                          <input type="text" name="permanent_address"  id="edit_permanent_address" class="form-control">
                                                                        </div>
                                                                      {{-- </div> --}}
                                                                      {{-- <div class="row"> --}}
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">প্রতিষ্ঠানের নাম</label>
                                                                          <input type="text" id="edit_org_name" name="org_name" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">প্রতিষ্ঠানের ঠিকানা</label>
                                                                          <input type="text" id="edit_org_address" name="org_address" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">লাইসেন্স শ্রেনী</label>
                                                                          <input type="text" id="edit_license" name="license" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                            <label class="form-label">লাইসেন্সের তারিখ</label>
                                                                            <input type="date" id="edit_license_date" name="license_date" class="form-control">
                                                                          </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label>ব্যাংকের নাম</label>
                                                                          <input type="text" name="bank_name" id="edit_bank_name" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">একাউন্ট নম্বর</label>
                                                                          <input type="text" name="bank_account" id="edit_bank_account" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label class="form-label">ব্যাংকের শাখা</label>
                                                                          <input type="text" name="branch" id="edit_branch" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                            <label class="form-label">স্মারক নম্বর</label>
                                                                            <input type="text" name="sarok_no" id="edit_sarok_no" class="form-control">
                                                                          </div>
                                                                        <div class="mb-3 col-md-4">
                                                                          <label>প্রয়োজনীয় ডকুমেন্ট</label>
                                                                          <input type="file" name="document" id="edit_document" class="form-file-input form-control">
                                                                        </div>


                                                                      {{-- </div> --}}
                                                                      <input type="submit" value="আপডেট করুন"  class="btn btn-success mb-3 col-md-6 offset-md-3">

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


                <div class="modal fade" id="personalModal">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content" style="background: #f7fdf7;">
                        <div class="modal-header" style="border:none">
                          {{-- <h5 class="modal-title">নতুন পিআইসি হোল্ডার তালিকা ভুক্ত করুন</h5> --}}
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-xl-3">
                              <div class="nav custom-tab flex-column nav-pills mb-3">
                                <form action="#" method="POST" class="mb-2">
                                  <input type="text" class="form-control" placeholder="এখানে সার্চ করুন">
                                </form>
                                <div class="bg-white d-flex align-middle mt-3 mb-2 p-2">
                                  <div class="mr-1">
                                    <img id="pic_photo_2" class="rounded-circle" width="30" height="30" style="margin: 50% 0 0 0;">
                                  </div>
                                  <div>
                                    <p id="owner_name_2"></p>
                                    <p id="owner_phone_2"></p>
                                  </div>
                                </div>
                                <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link active show">
                                  <i class="fas fa-folder-minus" style="margin-right: 7px;"></i>বিস্তারিত তথ্য </a>
                                <a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link">
                                  <i class="fas fa-folder-minus " style="margin-right: 7px;"></i>প্রকল্পের বিস্তারিত তথ্য </a>
                                <a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">
                                  <i class="fas fa-folder-minus " style="margin-right: 7px;"></i>বিলের আবেদন </a>
                                <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">
                                  <i class="fas fa-folder-minus" style="margin-right: 7px;"></i>বিলের ইনভইস তৈরি </a>
                                <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">
                                  <i class="fas fa-folder-minus " style="margin-right: 7px;"></i>চেকের অবস্থা </a>
                              </div>
                            </div>
                            <div class="col-xl-9" style="    background: #fff;">
                              <div class="tab-content custom-content">
                                <div id="v-pills-home" class="tab-pane fade active show">
                                  <div class="basic-form">
                                    <h3 class="mb-5">
                                      <i class="fa fa-address-book " style="margin-right: 7px;"></i>ঠিকাদারের বিস্তারিত তথ্য
                                    </h3>
                                    <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data"> @csrf <div class="row">
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">মালিকের নাম</label>
                                          {{-- <p id="pic_name"></p> --}}
                                          <input type="text" name="name" readonly class="form-control" id="pic_name">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">মালিকের মোবাইল নাম্বার </label>
                                          <input type="text" name="phone" readonly class="form-control" id="pic_phone">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">মালিকের এনআইডি নাম্বার</label>
                                          <input type="text" id="pic_nid" readonly name="nid" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label>ছবি</label>
                                          <div id="" class="mr-2" style="margin-right: 10px;">
                                            <img id="pic_photo" width="100" height="60">
                                          </div>
                                          {{-- <input type="file" id="pic_photo" name="photo" class="form-file-input form-control"> --}}
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">বর্তমান ঠিকানা</label>
                                          <input type="text" name="present_address" readonly id="present_address" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">স্থায়ী ঠিকানা</label>
                                          <input type="text" name="permanent_address" readonly id="permanent_address" class="form-control">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">প্রতিষ্ঠানের নাম</label>
                                          <input type="text" id="organization_name" readonly name="organization_name" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">প্রতিষ্ঠানের ঠিকানা</label>
                                          <input type="text" id="organization_address" readonly name="organization_address" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">লাইসেন্সের শ্রেণী </label>
                                          <input type="text" id="license" readonly name="license" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label>ব্যাংকের নাম</label>
                                          <input type="text" name="bank_name" readonly id="bank_name" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">একাউন্ট নম্বর</label>
                                          <input type="text" name="bank_account" readonly id="bank_account" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">ব্যাংকের শাখা</label>
                                          <input type="text" name="branch" readonly id="branch" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">লাইসেন্সের তারিখ</label>
                                            <input type="text" name="license_date" readonly id="license_date" class="form-control">
                                          </div>
                                          <div class="mb-3 col-md-4">
                                            <label class="form-label">স্মারক নাম্বার </label>
                                            <input type="text" name="sarok_no" readonly id="sarok_no" class="form-control">
                                          </div>
                                        <div class="mb-3 col-md-4">
                                          <label>প্রয়োজনীয় ডকুমেন্ট</label>
                                          <input type="file" name="document" readonly id="document" class="form-file-input form-control">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div id="v-pills-profile" class="tab-pane fade">
                                  <div class="basic-form">
                                    <h3 class="mb-5">
                                      <i class="fa fa-address-book " style="margin-right: 7px;"></i> প্রকল্পের বিস্তারিত তথ্য
                                    </h3>
                                    <form method="POST" action="" enctype="multipart/form-data"> @csrf <div class="row">
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">প্রকল্পের আইডি</label>
                                          <input type="text" name="prokolpo_no" readonly id="prokolpo_no" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">প্রকল্পের নাম</label>
                                          <input type="text" name="prokolpo_name" readonly id="prokolpo_name" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">প্রকল্পের শ্রেণী</label>
                                          <input type="text" name="prokolpo_type" readonly id="prokolpo_type" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">উপজেলা</label>
                                          <input type="text" name="upozela" readonly id="upozela" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">অর্থ বছর</label>
                                          <input type="text" name="arthabachar" readonly id="arthabachar" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">নথি নম্বর</label>
                                          <input type="text" name="nothi_no" readonly id="nothi_no" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">সাংগ্রহিক নাম্বার</label>
                                          <input type="text" name="collective_number" readonly id="collective_number" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">মন্ত্রনালয়ের স্মারক নম্বর</label>
                                          <input type="text" name="minister_number" readonly id="minister_number" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">তারিখ</label>
                                          <input type="date" name="date" id="date" readonly class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">তহবিল</label>
                                          <input type="text" name="" id="tahabil" readonly class="form-control">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">নোটিশ নং</label>
                                          <input type="text" name="notice_no" readonly id="notice_no" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label class="form-label">গ্রুপ নং</label>
                                          <input type="text" name="group_no" readonly id="group_no" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                          <label>প্রকল্পের বরাদ্ধ</label>
                                          <input type="text" name="amount" readonly id="amount" class="form-control">
                                        </div>
                                    </form>
                                  </div>
                                </div>
                                <div id="v-pills-messages" class="tab-pane fade">
                                  {{-- <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p> --}}
                                </div>
                                <div id="v-pills-settings" class="tab-pane fade">
                                  {{-- <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p> --}}
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

    <script>
        $(document).ready(function() {
          $(".infoBtn").click(function() {
            const id = $(this).attr('data-id');
            console.log(id);

          //   alert(id);
            $.ajax({
              url: 'thikadar_details/' + id,
              type: 'GET',
              data: {
                "id": id
              },
              success: function(data) {
              console.log(data);
              console.log(data.data.name);
              var ANSWER = data.data.photo;
              document.getElementById("pic_photo").src = 'image/' + ANSWER;
              document.getElementById("pic_photo_2").src = 'image/' + ANSWER;
              console.log(document.getElementById('pic_photo').src);
            //   document.getElementById("mobile").innerHTML = data.data.phone;
            //   document.getElementById("pic_name_2").innerHTML = data.data.name;
            //   document.getElementById("prokolpo_no").value = data.data.prokolpo_no;
            //   document.getElementById("prokolpo_name").value = data.data.prokolpo_name;
            //   document.getElementById("prokolpo_type").value = data.data.prokolpo_type;
            //   document.getElementById("upozela").value = data.data.upozela;
            //   document.getElementById("arthabachar").value = data.data.arthabachar;
            //   document.getElementById("nothi_no").value = data.data.nothi_no;
            //   document.getElementById("collective_number").value = data.data.collective_number;
            //   document.getElementById("minister_number").value = data.data.minister_number;
            //   document.getElementById("date").value = data.data.date;
            //   document.getElementById("tahabil").value = data.data.tahabil;
            //   document.getElementById("notice_no").value = data.data.notice_no;
            //   document.getElementById("group_no").value = data.data.group_no;
            //   document.getElementById("amount").value = data.data.amount;
            //   document.getElementById("pic_name").value = data.data.name;
            //   document.getElementById("pic_name_2").innerHTML = data.data.name;
            //   document.getElementById("pic_phone").value = data.data.phone;
            //   document.getElementById("mobile").innerHTML = data.data.phone;
            //   document.getElementById("pic_nid").value = data.data.nid;


              document.getElementById("pic_name").value = data.data.owner_name;
              document.getElementById("owner_name_2").innerHTML = data.data.owner_name;
              document.getElementById("pic_phone").value = data.data.owner_phone;
              document.getElementById("owner_phone_2").innerHTML = data.data.owner_phone;
              document.getElementById("pic_nid").value = data.data.owner_nid;
              document.getElementById("present_address").value = data.data.present_address;
              document.getElementById("permanent_address").value = data.data.permanent_address;
              document.getElementById("organization_name").value = data.data.org_name;
              document.getElementById("organization_address").value = data.data.org_address;
              document.getElementById("license").value = data.data.license;
              document.getElementById("bank_name").value = data.data.bank_name;
              document.getElementById("bank_account").value = data.data.bank_account;
              document.getElementById("branch").value = data.data.branch;
              document.getElementById("license_date").value = data.data.license_date;
              document.getElementById("sarok_no").value = data.data.sarok_no;
              document.getElementById("document").value = data.data.documents;
                  }
              })
          });
        });
      </script>

<script>
    $(document).ready(function(){
      $(".editPicModal").click(function(){
        const id = $(this).attr('data-id');
        // alert(id)
        $.ajax({
          url: '/api/thikadar_details_by_Id/' + id,
          type: 'GET',
          data: {
            "id": id
          },
          success: function(data) {
          console.log(data);
          console.log(data.data.id);

          var ANSWER = data.data.photo;
          document.getElementById("edit_owner_photo").src = 'image/' + ANSWER;
          console.log(document.getElementById('edit_owner_photo').src);


          document.getElementById("thikadar_id").value = data.data.id;
          document.getElementById("edit_owner_name").value = data.data.owner_name;
          document.getElementById("edit_owner_phone").value = data.data.owner_phone;
          document.getElementById("edit_owner_nid").value = data.data.owner_nid;
          document.getElementById("edit_present_address").value = data.data.present_address;
          document.getElementById("edit_permanent_address").value = data.data.permanent_address;
          document.getElementById("edit_org_name").value = data.data.org_name;
          document.getElementById("edit_org_address").value = data.data.org_address;
          document.getElementById("edit_license").value = data.data.license;
          document.getElementById("edit_license_date").value = data.data.license_date;
          document.getElementById("edit_bank_name").value = data.data.bank_name;
          document.getElementById("edit_bank_account").value = data.data.bank_account;
          document.getElementById("edit_branch").value = data.data.branch;
          document.getElementById("edit_sarok_no").value = data.data.sarok_no;
          document.getElementById("edit_document").value = data.data.document;
              }
          })

      });
    });
  </script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $('#insert_form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        // alert("Hi");
        // $('#image-input-error').text('');
        var id = $("#thikadar_id").val();
        // alert(id)
        $.ajax({
            type:'POST',
            url: `/api/update_thikadar_by_id/`+id,
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                // this.reset();
                console.log(response)
                alert("successfully Updated");
                window.location.reload();
                }
            },
            error: function(response){
                console.log(response);
                    $('#image-input-error').text(response.responseJSON.errors.file);
            }
        });
    });
</script>
{{-- <script>
    $("#insert_form").submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var id = $("#thikadar_id").val();
        var owner_name = $("#edit_owner_name").val();
        var owner_phone = $("#edit_owner_phone").val();
        var photo = $("#new_thikadar_photo").val();
        var owner_nid = $("#edit_owner_nid").val();
        var present_address = $("#edit_present_address").val();
        var permanent_address = $("#edit_permanent_address").val();
        var org_name = $("#edit_org_name").val();
        var org_address = $("#edit_org_address").val();
        var license = $("#edit_license").val();
        var license_date = $("#edit_license_date").val();
        var bank_name = $("#edit_bank_name").val();
        var bank_account = $("#edit_bank_account").val();
        var branch = $("#edit_branch").val();
        var sarok_no = $("#edit_sarok_no").val();
        var document = $("#edit_document").val();
        // alert(id)
        $.ajax({
            type: "POST",
            url: "/api/update_thikadar_by_id/"+id,
            // data: form.serialize(),
            data : {
                        'owner_name' : owner_name,
                        'owner_phone' : owner_phone,
                        'photo' : photo,
                        'owner_nid' : owner_nid,
                        'present_address' : present_address,
                        'permanent_address' : permanent_address,
                        'org_name' : org_name,
                        'org_address' : org_address,
                        'license' : license,
                        'license_date' : license_date,
                        'bank_name' : bank_name,
                        'bank_account' : bank_account,
                        'branch' : branch,
                        'sarok_no' : sarok_no,
                        'document' : document,
                    },
            dataType : "json",
            success: function(data)
            {
                console.log(data)
                if(data.error == false){
                //     // $("#division_name").val(' ');
                alert("successfully Updated");
                window.location.reload();

                }
            }
        });
    });
</script> --}}

	<script>

			$(document).ready( function () {
				$('#myTable').DataTable();
			} );

	</script>
    @endpush
