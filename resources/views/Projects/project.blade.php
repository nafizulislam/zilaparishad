@extends('layouts.layouts')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('title')
Project
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
                        <a href="{{ route('project.index') }}" class="nav-link active ">পি আই সি প্রকল্প </a>
                        <!-- <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">পি আই সি হােল্ডার </button> -->
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('package.index') }}" class="nav-link ">দরপত্রকৃত প্যাকেজ</a>
                        <!-- <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ঠিকাদার</button> -->
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('rate.index') }}" class="nav-link">রেট নির্ধারণ</a>
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
                        প্রকল্প সমূহের তালিকা
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

                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex btn-margin" style="    float: right;">
                                   

                                    <div class="date" id="absoluted">
						  					<label for="cars">অর্থ বছর:</label>
						  					<select name="cars" id="cars">
						  					    <option value="volvo">২০২০-২১</option>
						  					    <option value="saab">২০২০-২১</option>
						  					    <option value="opel">২০২০-২১</option>
						  					   
						  					</select>
						  				</div>
                                    <button  type="button"
                                        class="btn btn-success" data-bs-toggle="modal" data-bs-target="#thikader">নতুন সংযোগ</button>
                                
                                        {{-- @can('role-create') --}}
                                            
                                            <button style="margin-bottom: 15px;" class="btn btn-warning deleteAll" data-url="{{ url('selectedProjects') }}">ফাইল মুভ করুন</button>
                                        {{-- @endcan --}}
                                        @can('role')
                                            
                                        <button style="margin-bottom: 15px;" class="btn btn-warning deleteAll" data-url="{{ url('selectedProjects') }}">ফাইল মুভ করুন</button>
                                    @endcan

                                    @can('role')
                                            
                                        <button style="margin-bottom: 15px;" class="btn btn-warning deleteAll" data-url="{{ url('selectedProjects') }}">ফাইল মুভ করুন</button>
                                    @endcan

                                    @can('role')
                                            
                                        <button style="margin-bottom: 15px;" class="btn btn-warning deleteAll" data-url="{{ url('selectedProjects') }}">ফাইল মুভ করুন</button>
                                    @endcan

                                    @can('role')
                                            
                                        <button style="margin-bottom: 15px;" class="btn btn-warning deleteAll" data-url="{{ url('selectedProjects') }}">ফাইল মুভ করুন</button>
                                    @endcan

                                    <div class="dropdown custom-dropdown mb-0">
												<div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#bulk"  data-bs-toggle="modal" data-bs-target="#bulk">বাল্ক আপলোড</a>	
                                                <a class="dropdown-item" href="javascript:void(0);">প্রকল্পের কাভার পেইজ প্রিন্ট</a>
													<a class="dropdown-item " href="javascript:void(0);">বরাদ্দের চিঠি প্রিন্ট</a>
													<a class="dropdown-item " href="javascript:void(0);">প্রথম কিস্তির ডাটা সিট প্রিন্ট</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">চুড়ান্ত কিস্তির ডাটা সিট প্রিন্ট</a>


												</div>
											</div>
  



                                    <div class="modal fade" id="bulk">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title ">
                                                        <i class="fa fa-user" aria-hidden="true" style="margin-right:10px"></i>
                                                        বাল্ক আকারে নতুন প্রকল্প সংযোগ করুন</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="basic-form">
                                                        <form method="POST" action="{{route('project.import')}}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            {{--<div class="mb-3 row">
                                                                <label class="col-sm-3 col-form-label">মন্ত্রনালয়ের
                                                                    স্মারক নম্বর</label>
                                                                <div class="col-sm-5">
                                                                    <select
                                                                        class="default-select form-control wide mb-3 w-100"
                                                                        id="minister_number_dynamic"
                                                                        name="minister_number" style="width: 100px;">
                                                                        @foreach ($sarok as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            id="minister_value">{{
                                                                            $item->minister_number }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div> --}}

                                                            {{-- new here --}}
                                                            <style>
                                                                .style1{
                                                            border-top: 1px solid #8c8b8b;
                                                                }

                                                                .style4 {
                                                                    border-top: 1px dotted #8c8b8b;
                                                                }
                                                            </style>


                                                            <div class="mb-3 row">
                                                                <div class= "mb-3 col-md-4">
                                                                    <label for="">অর্থবছর</label>
                                                                    <select name="" id="" class="form-control dropdown-menu-right">
                                                                        <option value="">২0২0-২১</option>
                                                                    <option value="">২0২১-২২</option>
                                                                    </select>
                                                                    
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label for="">তহবিল</label>
                                                                    <select name="" id="" class="form-control dropdown-menu-right">
                                                                        <option value="">নিজস্ব তহবিল</option>
                                                                    <option value="">অনুদান</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label for="">তারিখ</label>
                                                                    <input type="date" class="form-control" placeholder="date">   
                                                                </div>   
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <div class="mb-3 col-md-4">
                                                                    <label for="">মন্ত্রণালয়ের স্মারক নং</label>
                                                                    <input type="text" class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label for="">তারিখ</label>
                                                                    <input type="date" class="form-control" placeholder="date">   
                                                                </div>   
                                                                <div class="mb-3 col-md-4">
                                                                    <label for="">প্রকল্পের চিঠি</label>
                                                                    <input type="file" class="form-control" placeholder="">
                                                                </div> 
                                                        </div>
                                                
                                                        <div class="mb-3 row">
                                                            <div class="mb-3 col-md-4">
                                                                <label for="">জেলা পরিষদ</label>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                            <div class="mb-3 col-md-4">
                                                                <label for="">তারিখ</label>
                                                                <input type="date" class="form-control" placeholder="date">   
                                                            </div>
                                                            <div class="mb-3 col-md-4">
                                                                <label for="">প্রকল্পের চিঠি</label>
                                                                <input type="file" class="form-control" placeholder="">
                                                            </div>
                                                        </div><br>
                                                
                                                        <div class="row style4">
                                                
                                                        </div><br><br>


                                                        <div class="mb-3 row">
                                                            <div class="mb-3 col-md-3">
                                                            <p>
                                                                নতুন প্রকল্পের জন্য সেম্পল ফাইল <br>ডাউনলোড করতে
                                                                <a href="{{asset('image/20220220121848.csv')}}" style="color:red">ক্লিক করুন</a>
                                                            </p>
                                                            </div>
                                                        
                                                                <div class="mb-3 col-md-5">
                                                                    <label>প্রকল্পের এক্সেল</label>
                                                                    <input type="file" name="prokolpo_exel"
                                                                        class="form-file-input form-control">
                                                                </div>
                                                            </div>


                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-success">সংযোগ
                                                                    করুন</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="thikader">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">নতুন প্রকল্প সংযোগ করুন</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="basic-form">


                                                        <form method="POST" action="{{route('project.store')}}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">মন্ত্রনালয়ের স্মারক
                                                                        নম্বর</label>
                                                                    {{-- <input type="text" name="minister_number"
                                                                        class="form-control"> --}}
                                                                    <select
                                                                        class="default-select form-control wide mb-3 w-100"
                                                                        id="minister_number_dynamic"
                                                                        name="minister_number" style="width: 100px;">
                                                                        <option>নির্বাচন করুন</option>
                                                                        @foreach ($sarok as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            id="minister_value">{{
                                                                            $item->minister_number }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">আইডি</label>
                                                                    <input type="text" name="prokolpo_no"
                                                                        class="form-control" readonly id="prokolpo_no">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">প্রকল্পের নাম</label>
                                                                    <input type="text" name="prokolpo_name"
                                                                        class="form-control " readonly id="prokolpo_name">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">প্রকল্পের শ্রেণী</label>
                                                                    <select
                                                                        class="default-select form-control wide mb-3 w-100"
                                                                        name="prokolpo_type" style="width: 100px;">
                                                                        <option>নিজস্ব তহবিল</option>
                                                                        <option>অনুদান</option>

                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">উপজেলা</label>
                                                                    <input
                                                                        class="default-select form-control wide mb-3 w-100"
                                                                        readonly id="upozela_id" name="upozela"
                                                                        style="width: 100px;">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">অর্থ বছর</label>
                                                                    <input type="text" name="arthabachar"
                                                                        id="arthabachar_id" readonly
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">নথি নম্বর</label>
                                                                    <input type="text" name="nothi_no" id="nothi_no_id"
                                                                        readonly class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">সাংগ্রহিক নাম্বার</label>
                                                                    <input type="text" name="collective_number" readonly
                                                                        id="collective_number_id" class="form-control">
                                                                </div>



                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">তারিখ</label>
                                                                    <input type="date" name="date" id="date_id" readonly
                                                                        class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">তহবিল</label>
                                                                    <input type="text" class="form-control"
                                                                        name="tahabil" readonly id="tahabil_id"
                                                                        style="width: 100px;">

                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">নোটিশ নং</label>
                                                                    <input type="text" name="notice_no"
                                                                        id="notice_no_id" readonly class="form-control">
                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">গ্রুপ নং</label>
                                                                    <input type="text" name="group_no" id="group_no_id"
                                                                        readonly class="form-control">
                                                                </div>



                                                            </div>
                                                            <div class="row">


                                                                <div class="mb-3 col-md-4">
                                                                    <label>প্রকল্পের বরাদ্ধ</label>
                                                                    <input type="text" name="amount"
                                                                        class="form-control">
                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label>প্রকল্পের নোটিশ</label>
                                                                    <input type="file" name="prokolpo_notice"
                                                                        class="form-file-input form-control">
                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label>প্রকল্পের রেট</label>
                                                                    <input type="file" name="prokolpo_rate"
                                                                        class="form-file-input form-control">
                                                                </div>

                                                                <div class="mb-3 col-md-4">
                                                                    <label>প্রকল্পের লিস্ট</label>
                                                                    <input type="file" name="prokolpo_list"
                                                                        class="form-file-input form-control">
                                                                </div>

                                                                {{-- <div class="mb-3 col-md-4">
                                                                    <label>প্রকল্পের এক্সেল</label>
                                                                    <input type="file" name="prokolpo_exel"
                                                                        class="form-file-input form-control">
                                                                </div> --}}


                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-success">সংযোগ
                                                                    করুন</button>
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
                                        <table
                                            class="table display mb-4 dataTablesCard order-table card-table text-black application"
                                            id="example">
                                            <thead class="table-head">

                                                <tr>
                                                    <th><input type="checkbox" id="chkCheckAll"/></th>
                                                    <th>আইডি</th>
                                                    <th>প্রকল্পের নাম</th>
                                                    <th>উপজেলা</th>
                                                    <th>বরাদ্ধ (লক্ষ টাকা)</th>
                                                    <th>কাজের প্রকৃতি</th>
                                                    {{-- <th>প্রথম চেক</th>
                                                    <th>দ্বিতীয় চেক</th>--}}
                                                    <th>বর্তমান অবস্থা</th>
                                                    <th>এ্যাকশন</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($project as $row)
                                                <tr>
                                                    <td><input type="checkbox" class="sub_chk" data-id="{{$row->id}}"></td>
                                                    <td class="wspace-no">
                                                        <span class="fs-16">
                                                            <ul class="d-inline-block">
                                                                <li> <a class="infoBtn" type="button"
                                                                        data-id="{{ $row->id }}" data-bs-toggle="modal"
                                                                        data-bs-target="#personalModal">{{$row->prokolpo_no}}</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </td>
                                                    <td>{{$row->prokolpo_name}}</td>

                                                    <td class="wspace-no">
                                                        {{ $row->upozela }}
                                                    </td>

                                                    <td class="wspace-no">
                                                        {{ $row->amount }}
                                                    </td>

                                                    <td class="wspace-no">
                                                        {{ $row->prokolpo_type }}
                                                    </td>

                                                    {{-- <td class="wspace-no">
                                                        <span class="fs-16">
                                                            <ul class="d-inline-block">
                                                                <li>2654115461</li>
                                                                <li>12-02-2022</li>
                                                            </ul>
                                                        </span>
                                                    </td>

                                                    <td class="wspace-no">
                                                        <span class="fs-16">
                                                            <ul class="d-inline-block">
                                                                <li>2654115461</li>
                                                                <li>12-02-2022</li>
                                                            </ul>
                                                        </span>
                                                    </td>--}}

                                                    <td class="wspace-no">

                                                        

                                                        {{-- new modal for deskpass --}}
                                                       
                                                       
                                                   
                                                     <span style="width: 150px;font-size: 12px;font-weight: 300;white-space: normal;padding: 3px 10px;     background: #058f40; color:#ffffff;    height: auto;" class="btn  shadow  sharp">
                                                        আবেদন পত্র নাম্বার <br>সংযোগ করা হয়েছে
                                                    </span>

                                                        {{-- চেক প্রদান করা হয়েছে --}}

                                                    </td>
                                                    <td class="d-flex">
                                                     
                                                    <a class="btn infoBtn shadow btn-secondary sharp me-1" type="button"
                                                                data-bs-target="#personalModal" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal"><i class="fas fa-eye"></i></a>
                                                          

                                                       <a class="btn editProjectModal shadow btn-background btn-success sharp me-1" type="button"
                                                                data-bs-target="#edit_project" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal"><i class="fas fa-pen"></i></a>
                                                       

                                                        {{-- Delete --}}

                                                        <form action="{{ route('project.delete',$row->id) }}"
                                                            method="POST" id="delete">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger shadow  sharp">
                                                            <i class="fa fa-trash"></i></button>
                                                        </form>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                            </button>
                                                            <div class="dropdown-menu" style="margin: 0px;">
                                                                
                                                        <a class="deskpassModal dropdown-item" type="button"
                                                                data-bs-target="#deskpass" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">আবেদন পত্র নং সংযোগ</a>

                                                        <a class="picaddproject dropdown-item" type="button"
                                                                data-bs-target="#basicAdd" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">আবেদনকারির তথ্য সংযোগ করুন</a>
                                                        <a class="picaddproject dropdown-item" type="button"
                                                                data-bs-target="#basicAdd" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">বরাদ্দের চিঠি সংযোগ</a>
                                                        <a class="picaddproject dropdown-item" type="button"
                                                                data-bs-target="#basicAdd" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">অনুমদিত ফাইল সংযোগ</a>
                                                        <a class="picaddproject dropdown-item" type="button"
                                                                data-bs-target="#basicAdd" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">ফাইল মুভমেন্ট</a>

                                                                




 



                                                            </div>
													    </div>
                                                 
                                                   
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


        <div class="modal fade" id="edit_project">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> প্রকল্প আপডেট করুন</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="basic-form">

                            <form method="" action="" id="insert_form">
                                @csrf
                                <div class="row">
                                    <input type="hidden" id="project_id">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">আইডি</label>
                                        <input type="text" name="prokolpo_no" id="prokolpo_no_updated"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">প্রকল্পের নাম</label>
                                        <input type="text" name="prokolpo_name" id="prokolpo_name_updated"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label>প্রকল্পের বরাদ্ধ</label>
                                        <input type="text" name="amount" id="amount_updated" class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">প্রকল্পের শ্রেণী</label>
                                        <input type="text" class="form-control" name="prokolpo_type"
                                            id="prokolpo_type_updated" readonly>
                                        {{-- <select class="default-select form-control wide mb-3 w-100"
                                            name="prokolpo_type" style="width: 100px;">
                                            <option>নিজস্ব তহবিল</option>
                                            <option>অনুদান</option>

                                        </select> --}}
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">মন্ত্রনালয়ের স্মারক নম্বর</label>
                                        <input type="text" name="minister_number" id="minister_number_updated" readonly
                                            class="form-control">
                                        {{-- <select class="default-select form-control wide mb-3 w-100"
                                            id="minister_number_dynamic" name="minister_number" style="width: 100px;">
                                            <option>নির্বাচন করুন</option>
                                            @foreach ($sarok as $item)
                                            <option value="{{ $item->id }}" id="minister_value">{{
                                                $item->minister_number }}</option>
                                            @endforeach
                                        </select> --}}
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">উপজেলা</label>
                                        <input class="default-select form-control wide mb-3 w-100" readonly
                                            id="upozela_updated" name="upozela" style="width: 100px;">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">অর্থ বছর</label>
                                        <input type="text" name="arthabachar" id="arthabachar_updated" readonly
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">নথি নম্বর</label>
                                        <input type="text" name="nothi_no" id="nothi_no_updated" readonly
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">সাংগ্রহিক নাম্বার</label>
                                        <input type="text" name="collective_number" readonly
                                            id="collective_number_updated" class="form-control">
                                    </div>



                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">তারিখ</label>
                                        <input type="date" name="date" id="date_updated" readonly class="form-control">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">তহবিল</label>
                                        <input type="text" class="form-control" name="tahabil" readonly
                                            id="tahabil_updated">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">নোটিশ নং</label>
                                        <input type="text" name="notice_no" id="notice_no_updated" readonly
                                            class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">গ্রুপ নং</label>
                                        <input type="text" name="group_no" id="group_no_updated" readonly
                                            class="form-control">
                                    </div>


                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">আপডেট করুন</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>


            {{-- New Starts here shayan --}}

            @include('Projects.deskpass')

            @include('Projects.add')


            {{-- New Ends here shayan --}}


        <div class="modal fade" id="personalModal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background: #f7fdf7;">
                    <div class="modal-header" style="border:none">
                        {{-- <h5 class="modal-title">নতুন পিআইসি হোল্ডার তালিকা ভুক্ত করুন</h5> --}}
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class=""> -->

                        <!-- <div class=""> -->
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="nav  custom-tab flex-column nav-pills mb-3">
                                    <form action="#" method="POST">
                                        <input style=" margin-bottom: 29px;" type="text" class="form-control"
                                            placeholder="এখানে সার্চ করুন">
                                    </form>
                                    <a href="#v-pills-profile" data-bs-toggle="pill"
                                        class="nav-link active show">প্রকল্পের বিস্তারিত তথ্য</a>
                                    <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link ">প্রকল্প গ্রহণকারীর
                                        বিস্তারিত তথ্য</a>
                                    <a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">বিল প্রাপ্তির
                                        জন্য আবেদন</a>
                                    <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">সকল বিলের
                                        চালান</a>
                                    <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">চেক প্রদানের
                                        বিস্তারিত তথ্য</a>
                                </div>
                            </div>


                            <div class="col-sm-9" style="background: #fff;">
                                <div class="tab-content custom-content">
                                    <div id="v-pills-home" class="tab-pane fade ">
                                        {{-- বিস্তারিত তথ্য --}}
                                        <h3 class="mb-5"><i class="fa fa-address-book "
                                                style="margin-right: 7px;"></i>প্রকল্প গ্রহণকারীর বিস্তারিত তথ্য</h3>
                                        <div class="basic-form">

                                            <form method="POST" action="{{route('client.store')}}"
                                                enctype="multipart/form-data">
                                                @csrf
                                              <div class="row">
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">আবেদনকারীর নাম</label>
                                                        {{-- <p id="pic_name"></p> --}}
                                                        <input type="text" name="name" readonly class="form-control"
                                                            id="pic_name">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">আবেদনকারীর মোবাইল নম্বর</label>
                                                        <input type="text" name="phone" readonly class="form-control"
                                                            id="pic_phone">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">আবেদনকারীর এনআইডি নাম্বার</label>
                                                        <input type="text" id="pic_nid" readonly name="nid"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label>ছবি</label>
                                                        <div id="">
                                                            <img id="pic_photo" width="100" height="60">
                                                        </div>

                                                        {{-- <input type="file" id="pic_photo" name="photo"
                                                            class="form-file-input form-control"> --}}
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">বর্তমান ঠিকানা</label>
                                                        <input type="text" name="present_address" readonly
                                                            id="present_address" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">স্থায়ী ঠিকানা</label>
                                                        <input type="text" name="permanent_address" readonly
                                                            id="permanent_address" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">সভাপতির নাম</label>
                                                        <input type="text" id="authorise_person" readonly
                                                            name="authorise_person" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">সভাপতির মোবাইল নম্বর</label>
                                                        <input type="text" id="authorise_person_mobile" readonly
                                                            name="authorise_person_mobile" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">সভাপতির এনআইডি নাম্বার</label>
                                                        <input type="text" id="authorise_person_nid" readonly
                                                            name="authorise_person_nid" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label>ব্যাংকের নাম</label>
                                                        <input type="text" name="bank_name" readonly id="bank_name"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">একাউন্ট নম্বর</label>
                                                        <input type="text" name="bank_account" readonly
                                                            id="bank_account" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">ব্যাংকের শাখা</label>
                                                        <input type="text" name="branch" readonly id="branch"
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label>প্রয়োজনীয় ডকুমেন্ট</label>
                                                        <input type="file" name="document" readonly id="document"
                                                            class="form-file-input form-control">
                                                    </div>

                                                </div>
                                                {{-- <div class="text-center">
                                                    <button type="submit" class="btn btn-success">সংযোগ করুন</button>
                                                </div> --}}

                                            </form>
                                        </div>
                                    </div>


                                    <div id="v-pills-profile" class="tab-pane active show fade">


                                        <div class="modal-body">
                                            <div class="basic-form">
                                                <h3 class="mb-5"><i class="fa fa-address-book "
                                                        style="margin-right: 7px;"></i>প্রকল্পিত বিস্তারিত তথ্য</h3>

                                                <!-- route korsi  -->


                                                <form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">আইডি</label>
                                                            <input type="text" name="prokolpo_no" readonly
                                                                id="prokolpo_no" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">প্রকল্পের নাম</label>
                                                            <input type="text" name="prokolpo_name" readonly
                                                                id="prokolpo_name" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">প্রকল্পের শ্রেণী</label>
                                                            <input type="text" name="prokolpo_type" readonly
                                                                id="prokolpo_type" class="form-control">

                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">উপজেলা</label>
                                                            <input type="text" name="upozela" readonly id="upozela"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">অর্থ বছর</label>
                                                            <input type="text" name="arthabachar" readonly
                                                                id="arthabachar" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">নথি নম্বর</label>
                                                            <input type="text" name="nothi_no" readonly id="nothi_no"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">সাংগ্রহিক নাম্বার</label>
                                                            <input type="text" name="collective_number" readonly
                                                                id="collective_number" class="form-control">
                                                        </div>

                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">মন্ত্রনালয়ের স্মারক নম্বর</label>
                                                            <input type="text" name="minister_number" readonly
                                                                id="minister_number" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">তারিখ</label>
                                                            <input type="date" name="date" id="date" readonly
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">তহবিল</label>
                                                            <input type="text" name="" id="tahabil" readonly
                                                                class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">নোটিশ নং</label>
                                                            <input type="text" name="notice_no" readonly id="notice_no"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label class="form-label">গ্রুপ নং</label>
                                                            <input type="text" name="group_no" readonly id="group_no"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-4">
                                                            <label>প্রকল্পের বরাদ্ধ</label>
                                                            <input type="text" name="amount" readonly id="amount"
                                                                class="form-control">
                                                        </div>



                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="v-pills-messages" class="tab-pane fade">

                                    </div>
                                    <div id="v-pills-settings" class="tab-pane fade">

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
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script>
    // $('#personalModal').modal('hide');

        $(document).ready(function(){
            $("#minister_number_dynamic").change(function(){
                var id =  document.getElementById('minister_number_dynamic').value;
                // alert(id);
                $.ajax({
              url: 'project_details_by_minister_number/'+id,
              type: 'GET',
              data: {
                "id": id
              },
              success:function(data) {
                console.log(data);
                document.getElementById("upozela_id").value = data.data.upozela_id;
                document.getElementById("arthabachar_id").value = data.data.arthabachar_id;
                document.getElementById("nothi_no_id").value = data.data.nothi_no;
                document.getElementById("collective_number_id").value = data.data.collective_number;
                document.getElementById("date_id").value = data.data.date;
                document.getElementById("tahabil_id").value = data.data.tahabil;
                document.getElementById("notice_no_id").value = data.data.notice_no;
                document.getElementById("group_no_id").value = data.data.group_no;

                }
            })
            });
        });


        $(document).ready(function() {
          $(".infoBtn").click(function() {
            const id = $(this).attr('data-id');
            console.log(id);
            // const id = $(this).attr('data-id');
            $.ajax({
              url: 'project_details/'+id,
              type: 'GET',
              data: {
                "id": id
              },
              headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
                },
              success:function(data) {
                console.log(data);
                console.log(data.data.prokolpo_name);
                document.getElementById("prokolpo_no").value = data.data.prokolpo_no;
                document.getElementById("prokolpo_name").value = data.data.prokolpo_name;
                document.getElementById("prokolpo_type").value = data.data.prokolpo_type;
                document.getElementById("upozela").value = data.data.upozela;
                document.getElementById("arthabachar").value = data.data.arthabachar;
                document.getElementById("nothi_no").value = data.data.nothi_no;
                document.getElementById("collective_number").value = data.data.collective_number;
                document.getElementById("minister_number").value = data.data.minister_number;
                document.getElementById("date").value = data.data.date;
                document.getElementById("tahabil").value = data.data.tahabil;
                document.getElementById("notice_no").value = data.data.notice_no;
                document.getElementById("group_no").value = data.data.group_no;
                document.getElementById("amount").value = data.data.amount;
                document.getElementById("pic_name").value = data.data.name;
                document.getElementById("pic_phone").value = data.data.phone;
                document.getElementById("pic_nid").value = data.data.nid;
                var ANSWER = data.data.photo;
                document.getElementById("pic_photo").src = 'image/' + ANSWER ;
                console.log(document.getElementById('pic_photo').src);
                document.getElementById("present_address").value = data.data.present_address;
                document.getElementById("permanent_address").value = data.data.permanent_address;
                document.getElementById("authorise_person").value = data.data.authorise_person;
                document.getElementById("authorise_person_mobile").value = data.data.authorise_person_mobile;
                document.getElementById("authorise_person_nid").value = data.data.authorise_person_nid;
                document.getElementById("bank_name").value = data.data.bank_name;
                document.getElementById("bank_account").value = data.data.bank_account;
                document.getElementById("branch").value = data.data.branch;
                document.getElementById("document").value = data.data.document;


              }
            })
          });
        });
</script>

<script>
    $(document).ready(function(){
      $(".editProjectModal").click(function(){
        const id = $(this).attr('data-id');
        // alert(id)
        $.ajax({
          url: '/api/project_details_by_Id/' + id,
          type: 'GET',
          data: {
            "id": id
          },
          success: function(data) {
          console.log(data);
          console.log(data.data.id);
          document.getElementById("project_id").value = data.data.id;
          document.getElementById("prokolpo_no_updated").value = data.data.prokolpo_no;
          document.getElementById("prokolpo_name_updated").value = data.data.prokolpo_name;
          document.getElementById("amount_updated").value = data.data.amount;
          document.getElementById("prokolpo_type_updated").value = data.data.prokolpo_type;
          document.getElementById("upozela_updated").value = data.data.upozela;
          document.getElementById("arthabachar_updated").value = data.data.arthabachar;
          document.getElementById("nothi_no_updated").value = data.data.nothi_no;
          document.getElementById("collective_number_updated").value = data.data.collective_number;
          document.getElementById("minister_number_updated").value = data.data.minister_number;
          document.getElementById("date_updated").value = data.data.date;
          document.getElementById("tahabil_updated").value = data.data.tahabil;
          document.getElementById("notice_no_updated").value = data.data.notice_no;
          document.getElementById("group_no_updated").value = data.data.group_no;

              }
          })

      });
    });
</script>


<script>
    $("#insert_form").submit(function(e) {
        e.preventDefault();

        // alert("hi")

        var form = $(this);
        var id = $("#project_id").val();
        var prokolpo_no = $("#prokolpo_no_updated").val();
        var prokolpo_name = $("#prokolpo_name_updated").val();
        var amount = $("#amount_updated").val();
        // alert(prokolpo_name)
        $.ajax({
            type: "POST",
            url: "/api/update_project_by_id/"+id,
            // data: form.serialize(),
            data : {
                        'prokolpo_no' : prokolpo_no,
                        'prokolpo_name' : prokolpo_name,
                        'amount' : amount,
                    },
            dataType : "json",
            success: function(data)
            {
                // console.log(data)
                if(data.error == false){
                    console.log(data)
                alert("successfully Updated");
                window.location.reload();
                }
            }
        });
    });
</script>


{{-- <script type="text/javascript">
    $(document).ready(function(){
        $('#chkCheckAll').on('click',function (e) {
            if ($(this).is(':checked',true)) {
                $('.checkBoxClass').prop('checked',true)
            }else {
                $('.checkBoxClass').prop('checked',false)
            }
        });
        $('.deleteAll').on('click',function (e) {
            var allVals = [];
            $('.checkBoxClass:checked').each(function () {
                allVals.push($(this).attr('data-id'));
            });
            if (allVals.length <= 0) {
                alert("Please select row.");
            }else {
                var check = confirm("Are you sure you want to send this row?");
                if (check == true) {
                    var join_selected_values = allVals.join(",");
                    $.ajax({
                        url: url('selected-projects'),
                        type: 'post',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:'ids='+join_selected_values,
                      
                    });
                    $.each(allVals, function( index, value ){
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            }
        });
       
      
    });
</script> --}}

<script type="text/javascript">
    $(document).ready(function(){
        $('#chkCheckAll').on('click',function (e) {
            if ($(this).is(':checked',true)) {
                $('.sub_chk').prop('checked',true)
            }else {
                $('.sub_chk').prop('checked',false)
            }
        });
        $('.deleteAll').on('click',function (e) {
            var allVals = [];
            $('.sub_chk:checked').each(function () {
                allVals.push($(this).attr('data-id'));
            });
            if (allVals.length <= 0) {
                alert("Please select row.");
            }else {
                var check = confirm("Are you sure you want to pass these row?");
                if (check == true) {
                    var join_selected_values = allVals.join(",");
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:'ids='+join_selected_values,
                       
                        
                    });
                    $.each(allVals, function( index, value ){
                        $('table tr').filter("[data-row-id='" + value + "']").remove();
                    });
                }
            }
        });
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });
        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();
            $.ajax({
                url: ele.href,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               
            });
            return false;
        });
    });
</script>

{{-- <script>
    $("#deskpassForm").submit(function(e) {
        e.preventDefault();

        // alert("hi")

        var form = $(this);
        var id = $("#project_id").val();
        // var prokolpo_no = $("#prokolpo_no_updated").val();
        // var prokolpo_name = $("#prokolpo_name_updated").val();
        // var amount = $("#amount_updated").val();
        // alert(prokolpo_name)
        $.ajax({
            type: "POST",
            url: "/api/update_project_by_id/"+id,
            // data: form.serialize(),
            data : {
                        'prokolpo_no' : prokolpo_no,
                        'prokolpo_name' : prokolpo_name,
                        'amount' : amount,
                    },
            dataType : "json",
            success: function(data)
            {
                // console.log(data)
                if(data.error == false){
                    console.log(data)
                alert("successfully Updated");
                window.location.reload();
                }
            }
        });
    });
</script> --}}



{{-- <script>
    $(document).ready(function(){

        $(document).on('click' 'add_new_data' function(e) {
            e.preventDefault();
            console.log('Hello');
        });
});
</script> --}}

{{-- <script>

        $('#deskpass_form').submit(function(e) {
            e.preventDefault();
            //console.log('Hello');
            var form = $(this);
            var id = $("#project_id").val();
            var data = {
                'application':$('#application_no').val(),
                'application_date':$('#application_date').val(),
            }
        
            //console.log(data);
            $ajax({
                type: "POST" ,
                url: "/deskpass",
                data:{
                        'application' : application_no,
                        'application_date' : application_date,
                    },
                dataType: "json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    //console.log(data);
                    if(data.error == false){
                    console.log(data)
                    alert("successfully Updated");
                    window.location.reload();
                }
                }
            });
        });

</script> --}}

{{-- <script>
    $("#deskpass_add").submit(function(e) {
        e.preventDefault();

        // alert();
        // const id = $(this).attr('data-id');
        // console.log(id);

        var form = $(this);
        var id = $("#project_id").val();
        console.log(id);
        // $.ajax({
        //     type: "POST",
        //     url: "/api/update_project_by_id/"+id,
        //     // data: form.serialize(),
        //     data : {
        //                 'prokolpo_no' : prokolpo_no,
        //                 'prokolpo_name' : prokolpo_name,
        //                 'amount' : amount,
        //             },
        //     dataType : "json",
        //     success: function(data)
        //     {
        //         // console.log(data)
        //         if(data.error == false){
        //             console.log(data)
        //         alert("successfully Updated");
        //         window.location.reload();
        //         }
        //     }
        // });
    });
</script> --}}




{{-- <script>
    $(document).ready(function(){
      $('.picaddproject').click(function(){
        //const id = $(this).attr('data-id');
        //console.log(id);
        //console.log('Hello');
        var form = $(this);
        var id = $("#project_id").val();
            
        console.log(id);
          })

      });
 
</script> --}}


{{-- <script>
    $('#deskpass_add').submit(function(e) {
            e.preventDefault();
            console.log('Hello');
            // var form = $(this);
            // var id = $("#project_id").val();
            // var data = {
            //     'application':$('#application_no').val(),
            //     'application_date':$('#application_date').val(),
            // }
        // $.ajax({
        //   url: '/api/project_details_by_Id/' + id,
        //   type: 'GET',
        //   data: {
        //     "id": id
        //   },
        //   success: function(data) {
        //   console.log(data);
        //   console.log(data.data.id);
        //   document.getElementById("project_id").value = data.data.id;

        //       }
        //   })

      });
    });
</script> --}}


</html>


@endpush