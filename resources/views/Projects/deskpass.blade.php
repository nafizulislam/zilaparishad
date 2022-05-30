<div class="modal fade" id="deskpass">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">
                    <i class="fa fa-user" aria-hidden="true" style="margin-right:10px"></i>
                    ডেস্কপাস প্রকল্প আপডেট করুন
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">

                    <form id="deskpass_form" method="GET" action="{{route('project.deskpassEdit', $row->id)}}"
                    enctype="multipart/form-data"> 
                        @csrf

                        <input type="hidden" id="deskpassid">



                        <style>
                            .style1 {
                                border-top: 1px solid #8c8b8b;
                            }

                            .style4 {
                                border-top: 1px dotted #8c8b8b;
                            }
                        </style>


                        
                            <div class="mb-3 col-md-12">
                                <label for="">আবেদন পত্র নাম্বার</label>
                                <input type="text" name="application_no" 
                                id="application_no" class="application_no form-control" placeholder="">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="">তারিখ</label>
                                <input type="date" name="application_date" 
                                id="application_date" class="application_date form-control" placeholder="date">
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success add_new_data">সংযোগ
                                করুন</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>