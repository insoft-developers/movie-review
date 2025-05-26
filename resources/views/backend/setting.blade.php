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
                            <h4 class="font-20 ">Setting</h4>
                            {{-- <a style="float:right;margin-top:-30px;" title="Edit Data" onclick="tambah()"
                                href="javascript:void(0)" class="btn btn-insoft btn-success">
                                <i class="icofont-plus-circle icon-insoft"></i>
                            </a> --}}
                        </div>
                        <div class="table-responsive">
                            <!-- Invoice List Table -->
                            <div class="card">
                                <div class="card-body">
                                    <table id="table-list" class="text card_color-bg table-striped table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Action</th>
                                                <th>App Name</th>
                                                <th>App Title</th>
                                                <th>App Icon</th>
                                                <th>App Email</th>
                                                <th>App Phone</th>
                                                <th>App Address</th>
                                                <th>App Contact Name</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- End Invoice List Table -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Main Content -->


    <div class="modal fade"  id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-tambah" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group mb-4">
                            <label for="app_name" class="mb-2 bold">App Name</label>
                            <input type="text" class="theme-input-style" id="app_name" name="app_name"
                                placeholder="Enter App Name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="app_title" class="mb-2 bold">App Title</label>
                            <input type="text" class="theme-input-style" id="app_title" name="app_title"
                                placeholder="Enter App Title">
                        </div>
                        <div class="form-group mb-4">
                            <label for="app_icon" class="mb-2 bold">App Icon</label>
                            <input type="file" class="theme-input-style" id="app_icon" name="app_icon" accept="*.jpg, *.jpeg, *.png">
                        </div>
                        <div class="form-group mb-4">
                            <label for="app_email" class="mb-2 bold">App Email</label>
                            <input type="email" class="theme-input-style" id="app_email" name="app_email"
                                placeholder="Enter App Email">
                        </div>
                        <div class="form-group mb-4">
                            <label for="app_phone" class="mb-2 bold">App Phone</label>
                            <input type="text" class="theme-input-style" id="app_phone" name="app_phone"
                                placeholder="Enter App Phone">
                        </div>
                        <div class="form-group mb-4">
                            <label for="app_address" class="mb-2 bold">App Address</label>
                            <input type="text" class="theme-input-style" id="app_address" name="app_address"
                                placeholder="Enter App Address">
                        </div>

                        <div class="form-group mb-4">
                            <label for="app_contact_name" class="mb-2 bold">App Contact Name</label>
                            <input type="text" class="theme-input-style" id="app_contact_name" name="app_contact_name"
                                placeholder="Enter App Contact Name">
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="btn-save" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
