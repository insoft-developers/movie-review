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
                            <h4 class="font-20 ">Sub Category List</h4>
                            <a style="float:right;margin-top:-30px;" title="Edit Data" onclick="tambah()"
                                href="javascript:void(0)" class="btn btn-insoft btn-success">
                                <i class="icofont-plus-circle icon-insoft"></i>
                            </a>
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
                                                <th>Sub Category Name</th>
                                                <th>Category Name</th>
                                                <th>Sub Category Slug</th>
                                                
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
                            <label for="imdb_id" class="mb-2 bold">Sub Category Name</label>
                            <input type="text" class="theme-input-style" id="subcategory_name" name="subcategory_name"
                                placeholder="Enter Category Name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="sub_category" class="mb-2 bold d-block">Category</label>
                            <div class="custom-select style--two">
                                <select class="theme-input-style" id="category_slug" name="category_slug">
                                    <option value="">Pilih</option>
                                    @foreach($category as $c)
                                    <option value="{{ $c->slug }}">{{ $c->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
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
