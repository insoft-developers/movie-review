@extends('backend.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content d-flex flex-column flex-md-row">

        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12 mb-30 mb-xl-0">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body p-30">
                            <div class="" id="c_pass">
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
                                <h4 class="mb-4">Change Password</h4>

                                <form action="{{ route('password.renew') }}" method="POST">
                                    @csrf
                                    <!-- Form Group -->
                                    <input type="hidden" name="id" id="id"
                                                    value="{{ Auth::guard('admin')->user()->id }}">
                                    <div class="form-group mb-20">
                                        <label for="oldPassword" class="mb-2 font-14 bold">Old Password</label>
                                        <input type="password" id="old_password" name="old_password"
                                            class="theme-input-style" placeholder="Type Here">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="newPassword" class="mb-2 font-14 bold">New Password</label>
                                        <input type="password" id="password" name="password" class="theme-input-style"
                                            placeholder="Type Here">
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group mb-20">
                                        <label for="retypePassword" class="mb-2 font-14 bold">Retype Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="theme-input-style" placeholder="Type Here">
                                    </div>
                                    <!-- End Form Group -->

                                    <div class="button-group mt-30">
                                        <button type="submit" class="btn">Save Changes</button>

                                    </div>
                                </form>
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
