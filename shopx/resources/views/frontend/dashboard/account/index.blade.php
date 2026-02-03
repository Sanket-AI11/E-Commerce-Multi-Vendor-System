@extends('frontend.dashboard.dashboard-app')

@section('dashboard-contents')
    <div id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
        <div class="card">
            <div class="card-header p-0">
                <h5>Account Details</h5>
            </div>
            <div class="card-body p-0">
                <p>You can edit your account details here.</p>
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mt-30">
                        <x-input-image id="image-preview" name="avatar" :image="{{ auth('web')->user()->avatar }}" />

                        <div class="form-group col-md-10">
                            <label>Name <span class="required">*</span></label>
                            <input required="" class="form-control" name="name" type="text"
                                value="{{ auth('web')->user()->name }}" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="form-group col-md-10">
                            <label>Email Address <span class="required">*</span></label>
                            <input required="" class="form-control" name="email" type="email"
                                value="{{ auth('web')->user()->email }}" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit"
                                value="Submit">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        {{-- Password section --}}
        <div class="card mt-4">
            <div class="card-header p-0">
                <h5>Change Password</h5>
            </div>
            <div class="card-body p-0">
                <p>You can change your password here.</p>
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="row mt-30">
                        <div class="form-group col-md-10">
                            <label>Current Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="current_password" type="password" />
                            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                        </div>
                        <div class="form-group col-md-10">
                            <label>New Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="password" type="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group col-md-10">
                            <label>Confirm Password <span class="required">*</span></label>
                            <input required="" class="form-control" name="password_confirmation" type="password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        {{-- <div class="form-group col-md-12">
                            <label>Select Box <span class="required">*</span></label>
                            <select class="select-active">
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                                <option value="#">656566</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Message <span class="required">*</span></label>
                            <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                        </div> --}}
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit"
                                value="Submit">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "Choose File", // Default: Choose File
                label_selected: "Change File", // Default: Change File
                no_label: false // Default: false
            });
        });
    </script>
@endpush
