<div class="modal fade" id="basicAdd">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center">
                    <i class="fa fa-address-book" aria-hidden="true" style="margin-right:10px"></i> নতুন পিআইসি
                    হোল্ডার তালিকা ভুক্ত করুন
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form id="deskpass_add" method="" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="project_id">
                        {{--<div class="row">
                            
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর নাম</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required
                                    placeholder="Please Enter Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর মোবাইল নম্বর</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required
                                    placeholder="Please Enter Phone Number">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">আবেদনকারীর এনআইডি নাম্বার</label>
                                <input type="text" name="nid" class="form-control" value="{{ old('nid') }}" required
                                    placeholder="Please Enter NID Number">
                                @error('nid')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>ছবি</label>
                                <input type="file" name="photo" class="form-file-input form-control" required>
                                @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">বর্তমান ঠিকানা</label>
                                <input type="text" name="present_address" value="{{ old('present_address') }}"
                                    class="form-control" required placeholder="Please Enter Present Address">
                                @error('present_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">স্থায়ী ঠিকানা</label>
                                <input type="text" name="permanent_address" value="{{ old('permanent_address') }}"
                                    class="form-control" required placeholder="Please Enter Parmanent Address">
                                @error('permanent_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>--}}
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির নাম</label>
                                <input type="text" name="authorise_person" value="{{ old('authorise_person') }}"
                                    class="form-control" required placeholder="Please Enter Name">
                                @error('authorise_person')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির মোবাইল নম্বর</label>
                                <input type="text" name="authorise_person_mobile"
                                    value="{{ old('authorise_person_mobile') }}" class="form-control" required
                                    placeholder="Please Enter Phone Number">
                                @error('authorise_person_mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">সভাপতির এনআইডি নাম্বার</label>
                                <input type="text" name="authorise_person_nid" value="{{ old('authorise_person_nid') }}"
                                    class="form-control" required placeholder="Please Enter NID Number">
                                @error('authorise_person_nid')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>ব্যাংকের নাম</label>
                                <input type="text" name="bank_name" value="{{ old('bank_name') }}" class="form-control"
                                    required placeholder="Please Enter Bank Address">
                                @error('bank_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">একাউন্ট নম্বর</label>
                                <input type="text" name="bank_account" value="{{ old('bank_account') }}"
                                    class="form-control" required placeholder="Please Enter Account Number">
                                @error('bank_account')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">ব্যাংকের শাখা</label>
                                <input type="text" name="branch" class="form-control" value="{{ old('branch') }}"
                                    required placeholder="Please Enter Branch Name">
                                @error('branch')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label>প্রয়োজনীয় ডকুমেন্ট</label>
                                <input type="file" name="document" value="{{ old('document') }}"
                                    class="form-file-input form-control" required>
                                @error('document')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3 col-md-4">
                                <label>প্রকল্প প্রদান</label>
                                <select class="default-select form-control wide mb-3 w-100"
                                    value="{{ old('project_id') }}" name="project_id" style="width: 100px;" required>
                                    <option value="">প্রকল্প প্রদান</option>
                                    @foreach($project as $row)
                                    <option value="{{ $row->id }}">{{ $row->prokolpo_name }}</option>
                                    @endforeach
                                    @error('project_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>

                            </div> --}}
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-md btn-success nwbtn">সংযোগ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>