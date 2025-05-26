@extends('backend.master')

@section('content')
    <div class="main-content d-flex flex-column flex-md-row">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12 mb-30 mb-xl-0">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body p-30">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="general">
                                    @if ($errors->any())
                                        <div style="color:red;">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div style="color:green;">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <h4 class="mb-4">Account Settings</h4>

                                    <form action="{{ route('profile.renew') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6">
                                                <!-- Form Group -->
                                                <input type="hidden" name="id" id="id"
                                                    value="{{ $data->id }}">
                                                <div class="form-group mb-20">
                                                    <label for="name" class="mb-2 font-14 bold">Name</label>
                                                    <input value="{{ $data->name }}" type="text" id="name"
                                                        name="name" class="theme-input-style"
                                                        placeholder="Type Neme Here">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group mb-20">
                                                    <label for="email" class="mb-2 font-14 bold">Email</label>
                                                    <input value="{{ $data->email }}" type="email" id="email"
                                                        name="email" class="theme-input-style"
                                                        placeholder="Type Email Here">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                            <div class="col-xl-4 col-lg-6">
                                                <!-- Form Group -->
                                                <div class="form-group mb-20">
                                                    <label for="level" class="mb-2 font-14 bold">Level</label>
                                                    <select id="level" name="level" class="theme-input-style"
                                                        disabled>
                                                        <option value="super" @selected($data->level == 'super')>Super Admin
                                                        </option>
                                                        <option value="admin" @selected($data->level == 'admin')>Admin</option>
                                                    </select>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->

                                                <!-- End Form Group -->
                                            </div>
                                            <div class="col-xl-4">

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="button-group mt-30 mt-xl-n5">
                                                    <button type="submit" class="btn">Save Changes</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="c_pass">
                                    <h4 class="mb-4">Change Password</h4>

                                    <form action="#">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="oldPassword" class="mb-2 font-14 bold">Old Password</label>
                                            <input type="password" id="oldPassword" class="theme-input-style"
                                                placeholder="Type Here">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="newPassword" class="mb-2 font-14 bold">New Password</label>
                                            <input type="password" id="newPassword" class="theme-input-style"
                                                placeholder="Type Here">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="retypePassword" class="mb-2 font-14 bold">Retype Password</label>
                                            <input type="password" id="retypePassword" class="theme-input-style"
                                                placeholder="Type Here">
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                            <button type="button"
                                                class="link-btn bg-transparent ml-3 soft-pink">Cancel</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="info">
                                    <h4 class="mb-4">Informations</h4>

                                    <form action="#">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="bio" class="mb-2 font-14 bold">Bio</label>
                                            <textarea id="bio" class="theme-input-style style--two" placeholder="Type Your Bio"></textarea>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="default-date" class="mb-2 font-14 bold">Date Of Birth</label>
                                            <input type="text" id="default-date" class="theme-input-style"
                                                placeholder="05 September 1998">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label class="mb-2 font-14 bold">Country</label>
                                            <select class="form-control">
                                                <option value="bangladesh">Bangladesh</option>
                                                <option value="india">India</option>
                                                <option value="nepal">Nepal</option>
                                                <option value="pakistan">Pakistan</option>
                                            </select>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label class="mb-2 font-14 bold">Lenguage</label>

                                            <select class="language-select" name="states[]" multiple="multiple">
                                                <option value="english">English</option>
                                                <option value="bangla">Bangla</option>
                                                <option value="arabic">Arabic</option>
                                                <option value="french">French</option>
                                            </select>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="phone" class="mb-2 font-14 bold">Phone</label>
                                            <input type="text" id="phone" class="theme-input-style"
                                                placeholder="(+656) 254 2568">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="webSite" class="mb-2 font-14 bold">Website</label>
                                            <input type="url" id="webSite" class="theme-input-style"
                                                placeholder="Type Here">
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                            <button type="button"
                                                class="link-btn bg-transparent ml-3 soft-pink">Cancel</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="social">
                                    <h4 class="mb-4">Social Links</h4>

                                    <form action="#">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="facebook" class="mb-2 font-14 bold">Facebook</label>
                                            <input type="url" id="facebook" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="twitter" class="mb-2 font-14 bold">Twitter</label>
                                            <input type="url" id="twitter" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="linkedin" class="mb-2 font-14 bold">Linkedin</label>
                                            <input type="url" id="linkedin" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="pinterest" class="mb-2 font-14 bold">Pinterest</label>
                                            <input type="url" id="pinterest" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="quora" class="mb-2 font-14 bold">Quora</label>
                                            <input type="url" id="quora" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="instagram" class="mb-2 font-14 bold">Instagram</label>
                                            <input type="url" id="instagram" class="theme-input-style"
                                                placeholder="Add Links">
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                            <button type="button"
                                                class="link-btn bg-transparent ml-3 soft-pink">Cancel</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="notifications">
                                    <h4 class="mb-5">Notification Settings</h4>

                                    <form action="#">
                                        <h5 class="text_color mb-4">Account Settings</h5>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Email me when someone comments onmy article</span>

                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Email me when someone answers on my form</span>

                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Invites me to co-own a moodboard</span>

                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Receive an email summary of notifications instead of individual
                                                emails</span>

                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Notifications about upcoming live events</span>
                                        </div>


                                        <h5 class="text_color pt-3 mb-4">Activity</h5>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Blocked users will no longer be allowed to: follow you, see your work in
                                                their feed.</span>
                                        </div>

                                        <div class="d-flex align-items-center mb-4">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Receive an email summary of notifications instead of individual
                                                emails</span>

                                        </div>

                                        <div class="d-flex align-items-center">
                                            <div class="switch-wrap">
                                                <!-- Switch -->
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="control"></span>
                                                </label>
                                                <!-- End Switch -->
                                            </div>

                                            <span>Error saving: please try again later</span>
                                        </div>


                                        <div class="button-group mt-30">
                                            <button type="submit" class="btn">Save Changes</button>
                                            <button type="button"
                                                class="link-btn bg-transparent ml-3 soft-pink">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
