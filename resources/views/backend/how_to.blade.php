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
                            <h4 class="font-20 ">How To Download</h4>

                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <form method="POST" action="{{ route('update.how') }}">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label for="plot" class="mb-2 bold d-block">Download Instruction</label>
                                            <textarea style="height: 300px;" id="download_info" name="download_info" class="theme-input-style"
                                                placeholder="Enter Download Instruction"><?= $data->download_info ?></textarea>
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
