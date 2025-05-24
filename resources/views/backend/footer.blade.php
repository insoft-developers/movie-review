<!-- Main Content -->
<!-- Main Content -->
@extends('backend.master')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pt-30">
                            <h4 class="font-20 ">Footer Menu</h4>

                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <form method="POST" action="{{ route('footer.update') }}">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">Request US</label>
                                            <textarea style="height: 300px;" id="request_us" name="request_us" class="theme-input-style"
                                                placeholder="Enter Request Us Instruction"><?= $data->request_us ;?></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">DMCA</label>
                                            <textarea style="height: 300px;" id="dmca" name="dmca" class="theme-input-style"
                                                placeholder="Enter DMCA Instruction"><?= $data->dmca ;?></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">Contact US</label>
                                            <textarea style="height: 300px;" id="contact_us" name="contact_us" class="theme-input-style"
                                                placeholder="Enter Contact US Instruction"><?= $data->contact_us ;?></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">About US</label>
                                            <textarea style="height: 300px;" id="about_us" name="about_us" class="theme-input-style"
                                                placeholder="Enter About US Instruction"><?= $data->about_us ;?></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">Site Disclaimer</label>
                                            <textarea style="height: 300px;" id="site_disclaimer" name="site_disclaimer" class="theme-input-style"
                                                placeholder="Enter Site Disclaimer Instruction"><?= $data->site_disclaimer ;?></textarea>
                                        </div>
                                        <button style="float: right;" id="btn-save" type="submit"
                                            class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
