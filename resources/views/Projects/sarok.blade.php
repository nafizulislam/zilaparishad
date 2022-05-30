

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
                <a href="{{ route('rate.index') }}" class="nav-link">রেট নির্ধারণ</a>
                <!-- <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ভাড়াটিয়া, ইজারাদার</button> -->
            </li>

            <li class="nav-item" role="presentation">
                <a href="{{ route('sarok.index') }}" class="nav-link active">মন্ত্রনালয়ের স্মারক নম্বর</a>
                <!-- <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ভাড়াটিয়া, ইজারাদার</button> -->
            </li>
        </ul>
        {{-- new add --}}
        <hr style="margin-top: -15px;">


        <div class="d-flex justify-content-between">

            <h3>
                <i class="fa fa-address-book" aria-hidden="true" style="margin-right:10px"></i>
                মন্ত্রনালয়ের স্মারক নম্বর সমূহ
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
                        <select class="default-select form-control wide mb-3 w-100" style="width: 100px;">
                            <option>2020-21</option>

                        </select>
                    </form>
                    <button style="width: 200px; margin-left:20px;height: 40px;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#thikader">নতুন সংযোগ</button>
                    <div class="modal fade" id="thikader">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">নতুন স্মারক নম্বর সংযোগ করুন</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <form method="POST" action="{{route('sarok.store')}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row">

                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">মন্ত্রনালয়ের স্মারক নম্বর</label>
                                                    <input type="text" name="minister_number" class="form-control">
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">উপজেলা</label>
                                                    <select class="default-select form-control wide mb-3 w-100" name="upozela" style="width: 100px;">
                                                        <option>লোহাগাড়া</option>
                                                        <option>পটিয়া্</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">অর্থ বছর</label>
                                                    {{-- <input type="text" name="arthabachar" class="form-control"> --}}
                                                    <select class="default-select form-control wide mb-3 w-100" name="arthabachar" style="width: 100px;">
                                                        <option>2020-2021</option>
                                                        <option>2021-2022</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">নথি নম্বর</label>
                                                    <input type="text" name="nothi_no" class="form-control">
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">সাংগ্রহিক নাম্বার</label>
                                                    <input type="text" name="collective_number" class="form-control">
                                                </div>



                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">তারিখ</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">তহবিল</label>
                                                    <select class="default-select form-control wide mb-3 w-100" name="tahabil" >
                                                        <option>নিজস্ব তহবিল</option>
                                                        <option>অনুদান</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">নোটিশ নং</label>
                                                    <input type="text" name="notice_no" class="form-control">
                                                </div>

                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label">গ্রুপ নং</label>
                                                    <input type="text" name="group_no" class="form-control">
                                                </div>

                                            </div>
                                            {{-- <div class="row">

                                            </div> --}}
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
                                            <th>মন্ত্রনালয়ের স্মারক নম্বর</th>
                                            <th>উপজেলা</th>
                                            <th>অর্থ বছর</th>
                                            <th>নথি নম্বর</th>
                                            <th>সাংগ্রহিক নাম্বার</th>
                                            <th>তারিখ</th>
                                            <th>তহবিল</th>
                                            <th>নোটিশ নং</th>
                                            <th>গ্রুপ নং</th>
                                            <th>এ্যাকশন</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($sarok as $row)
                                        <tr>
                                            <td class="wspace-no">
                                                <span class="fs-16">
                                                    <ul class="d-inline-block">
                                                        <li> <a class="infoBtn" type="button"
                                                             data-id="{{ $row->id }}" data-bs-toggle="modal"
                                                             data-bs-target="#personalModal">{{$row->minister_number}}</a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </td>

                                            <td class="wspace-no">
                                                {{ $row->upozela_id }}
                                            </td>

                                            <td class="wspace-no">
                                                {{$row->arthabachar_id}}
                                            </td>

                                            <td class="wspace-no">
                                                {{$row->nothi_no}}
                                            </td>


                                            <td class="wspace-no">
                                                {{ $row->collective_number }}
                                            </td>

                                            <td class="wspace-no">
                                                {{ $row->date }}
                                            </td>

                                            <td class="wspace-no">
                                                {{ $row->tahabil }}
                                            </td>

                                            <td class="wspace-no">
                                                {{ $row->notice_no }}
                                            </td>

                                            <td class="wspace-no">
                                                {{ $row->group_no }}
                                            </td>

                                            <td class="d-flex">

                                                <span class="btn btn-outline light  border-light btn-sm " style="margin-right:5px"><i class="fas fa-pen"></i></span>

                                                <form action="{{ route('sarok.delete',$row->id)}}" 
                                                method="POST" id="delete">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-eraser" ></i></button>
                                                </form>
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




<div class="modal fade" id="personalModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #f7fdf7;">
            <div class="modal-header">
                {{-- <h5 class="modal-title">নতুন পিআইসি হোল্ডার তালিকা ভুক্ত করুন</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Nav Pill</h4>
                    </div>
                    <div class="card-body"> -->
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- <div class="nav flex-column nav-pills mb-3"> -->
                                <div class="nav  custom-tab flex-column nav-pills mb-3">
                                <form action="#" method="POST" >
                                    <input style="    margin-bottom: 29px;" type="text" class="form-control" placeholder="এখানে সার্চ করুন">
                                </form>
                                    <a href="#v-pills-profile" data-bs-toggle="pill" class="nav-link active show">প্রকল্পের বিস্তারিত তথ্য</a>
                                    <a href="#v-pills-home" data-bs-toggle="pill" class="nav-link ">প্রকল্প গ্রহণকারীর বিস্তারিত তথ্য</a>
                                    <a href="#v-pills-messages" data-bs-toggle="pill" class="nav-link">বিল প্রাপ্তির জন্য আবেদন</a>
                                    <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">সকল বিলের চালান</a>
                                    <a href="#v-pills-settings" data-bs-toggle="pill" class="nav-link">চেক প্রদানের বিস্তারিত তথ্য</a>
                                </div>
                            </div>
            <div class="col-sm-9" style= "background: #fff;">
                <div class="tab-content">
                    <div id="v-pills-home" class="tab-pane fade ">
                        {{-- বিস্তারিত তথ্য --}}
                <div class="basic-form">
                    <form method="POST" action="{{route('client.store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর  নাম</label>
                                {{-- <p id="pic_name"></p> --}}
                                <input type="text" name="name"  readonly  class="form-control" id="pic_name">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর মোবাইল নম্বর</label>
                                <input type="text" name="phone" readonly  class="form-control" id="pic_phone">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর এনআইডি নাম্বার</label>
                                <input type="text" id="pic_nid" readonly  name="nid" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>ছবি</label>
                                <div id="">
                                    <img id="pic_photo" width="100" height="60">
                                </div>

                                {{-- <input type="file" id="pic_photo" name="photo" class="form-file-input form-control"> --}}
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">বর্তমান ঠিকানা</label>
                                <input type="text" name="present_address" readonly  id="present_address" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">স্থায়ী ঠিকানা</label>
                                <input type="text" name="permanent_address" readonly  id="permanent_address" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির  নাম</label>
                                <input type="text" id="authorise_person" readonly  name="authorise_person" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির মোবাইল নম্বর</label>
                                <input type="text" id="authorise_person_mobile" readonly  name="authorise_person_mobile" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির এনআইডি নাম্বার</label>
                                <input type="text" id="authorise_person_nid" readonly  name="authorise_person_nid" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>ব্যাংকের নাম</label>
                                <input type="text" name="bank_name" readonly  id="bank_name" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">একাউন্ট নম্বর</label>
                                <input type="text" name="bank_account" readonly  id="bank_account" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">ব্যাংকের শাখা</label>
                                <input type="text" name="branch" readonly  id="branch" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>প্রয়োজনীয় ডকুমেন্ট</label>
                                <input type="file" name="document" readonly  id="document" class="form-file-input form-control">
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
        <h3 class="mb-5"><i class="fa fa-address-book " style="margin-right: 7px;"></i>  বিস্তারিত তথ্য</h3>
            <form method="POST" action="" enctype="multipart/form-data">
            @csrf
                <div class="row">
                <div class="mb-3 col-md-4">
                        <label class="form-label">প্রকল্পের আইডি</label>
                        <input type="text"name="prokolpo_no" readonly  id="prokolpo_no" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">প্রকল্পের নাম</label>
                        <input type="text"name="prokolpo_name" readonly  id="prokolpo_name" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">প্রকল্পের শ্রেণী</label>
                        <input type="text"name="prokolpo_type" readonly  id="prokolpo_type" class="form-control">

                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">উপজেলা</label>
                        <input type="text" name="upozela" readonly  id="upozela" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">অর্থ বছর</label>
                        <input type="text" name="arthabachar" readonly  id="arthabachar" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">নথি নম্বর</label>
                        <input type="text" name="nothi_no" readonly  id="nothi_no" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">সাংগ্রহিক নাম্বার</label>
                        <input type="text" name="collective_number" readonly  id="collective_number" class="form-control">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">মন্ত্রনালয়ের স্মারক নম্বর</label>
                        <input type="text" name="minister_number" readonly  id="minister_number" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">তারিখ</label>
                        <input type="date" name="date" id="date" readonly  class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">তহবিল</label>
                        <input type="text" name="" id="tahabil" readonly  class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label">নোটিশ নং</label>
                        <input type="text" name="notice_no" readonly  id="notice_no" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label">গ্রুপ নং</label>
                        <input type="text" name="group_no" readonly  id="group_no" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label>প্রকল্পের বরাদ্ধ</label>
                        <input type="text" name="amount" readonly  id="amount" class="form-control">
                    </div>

                    {{-- <div class="mb-3 col-md-4">
                        <label>প্রকল্পের নোটিশ</label>
                        <input type="file" name="prokolpo_notice" class="form-file-input form-control">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label>প্রকল্পের রেট</label>
                        <input type="file" name="prokolpo_rate" class="form-file-input form-control">
                    </div> --}}

                    {{-- <div class="mb-3 col-md-4">
                        <label>প্রকল্পের লিস্ট</label>
                        <input type="file" name="prokolpo_list" class="form-file-input form-control">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label>প্রকল্পের এক্সেল</label>
                        <input type="file" name="prokolpo_exel" class="form-file-input form-control">
                    </div>


                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">সংযোগ করুন</button>
                </div> --}}

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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script>
        // $('#personalModal').modal('hide');


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
        $(document).ready( function () {
            $('#myTable1').DataTable();
        } );
</script>
@endpush
