<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>প্রকল্পের প্রচ্ছদ </title>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

<!-- Container -->
<div class="invoice-container">

<div class="cover">

                            <div class="col-xl-12 mt-3">
                                <div class="list">
                                    <div class="table-responsive">
                                        <table
                                            class="table display mb-4 dataTablesCard order-table card-table text-black application"
                                            id="example">
                                            <thead class="table-head">

                                                <tr>
                                                    <th><input type="checkbox" id="chkCheckAll"/></th>
                                                    <th>প্রকল্পের আইডি</th>
                                                    <th>প্রকল্পের নাম</th>
                                                    <th>উপজেলা</th>
                                                    <th>বরাদ্ধ (লক্ষ টাকা)</th>
                                                    <th>কাজের প্রকৃতি</th>
                                                    <th>প্রথম চেক</th>
                                                    <th>দ্বিতীয় চেক</th>
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

                                                    <td class="wspace-no">
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
                                                    </td>

                                                    <td class="wspace-no">

                                                        

                                                        {{-- new modal for deskpass --}}
                                                       
                                                       
                                                   
                                                      
                                                        <a class="btn btn-success btn-background deskpassModal" type="button"
                                                                data-bs-target="#deskpass" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">আপডেট</a>

                                                        <a class="picaddproject btn btn-success btn-background" type="button"
                                                                data-bs-target="#basicAdd" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal">পি আই ছি যুক্ত করুন</a>

                                                       

                                                        {{-- চেক প্রদান করা হয়েছে --}}

                                                    </td>
                                                    <td class="d-flex">
                                                        <span class="btn btn-outline light  border-light btn-sm "
                                                            style="margin-right:5px">
                                                            <a class="editProjectModal" type="button"
                                                                data-bs-target="#edit_project" data-id="{{ $row->id }}"
                                                                data-bs-toggle="modal"><i class="fas fa-pen"></i></a>
                                                        </span>

                                                        {{-- Delete --}}

                                                        <form action="{{ route('project.delete',$row->id) }}"
                                                            method="POST" id="delete">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fas fa-eraser"></i></button>
                                                        </form>

                                                   
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
  <!-- Header -->
  <header>
  <div class="inrow align-items-center">
    <div class="in-col-6 text-center text-sm-left ">
      <img id="logo" src="css/logo.png" title="জেলা পরিষদ" alt="জেলা পরিষদ" class="h70">
    </div>
	 <div class="in-col-6 text-center text-sm-right">
      <img id="logo" src="css/barcode.jpg" title="জেলা পরিষদ" alt="জেলা পরিষদ" class="h100">
    </div>
	
  </div>
  
  </header>
  <hr><br>
  <!-- Main Content -->
  <main>
    <div class="inrow">
    <div class="in-col-12">
	<h4 class="text-7 mb-0 text-center"> <strong>বাইতুর রিজওয়ান জামে মসজিদ উন্নয়ন মহানগর বাইতুর রিজওয়ান জামে মসজিদ </strong></h4>
	 <h5 class="text-5 mt-2 mb-0 text-center">উপজেলার নাম, চট্টগ্রাম </h5>
	 </div>
   
	  
  </div><br>
  <hr>
  <br>
  <div class="inrow text-3">
    <div class="in-col-6"><strong>বরাদ্দের সন :</strong> ২০২১-২০২২ </div>
    <div class="in-col-6 text-sm-right"> <strong>বরাদ্দের খাত :</strong> নিজস্ব তহবিল</div>
	  
  </div>
  <br>
  <div class="inrow text-3">
    <div class="in-col-6"><strong>বরাদ্দের পরিমাণ :</strong> ২ লক্ষ টাকা মাত্র</div>
    <div class="in-col-6 text-sm-right"> <strong> বরাদ্দ পত্রের নাম্বার :</strong> 202220215514</div>
	  
  </div>
  <br>
  <hr>

  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  পি, আই, চি প্রকল্প  ২০২১-২০২২ | চট্টগ্রাম জেলা পরিষদ 
</footer>
</div>
</div>


</body></html>