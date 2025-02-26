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
                            <h4 class="font-20 ">Movie List</h4>
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
                                                <th>IMDB ID</th>
                                                <th>Action</th>
                                                <th>Poster</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Year</th>
                                                <th>Rated</th>
                                                <th>Released</th>
                                                <th>Run Time</th>
                                                <th>Genre</th>
                                                <th>Director</th>
                                                <th>Actors</th>
                                                <th>Plot</th>
                                                <th>Banner</th>
                                                <th>Popular</th>
                                                <th>New</th>
                                                <th>Anime</th>
                                                <th>Language</th>
                                                <th>Country</th>
                                                <th>Awards</th>
                                                <th>Rating</th>
                                                <th>Type</th>
                                                <th>DVD</th>
                                                <th>Box Office</th>
                                                <th>Production</th>
                                                <th>Website</th>
                                                <th>Date</th>

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


    <div class="modal fade" tabindex="-1" id="modal-tambah">
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
                        <div class="form-group mb-4">
                            <label for="imdb_id" class="mb-2 bold">IMDB ID</label>
                            <input type="text" class="theme-input-style" id="imdb_id" name="imdb_id"
                                placeholder="Enter IMDB ID">
                        </div>
                        <div class="edit-container">
                            <div class="form-group mb-4">
                                <label for="poster" class="mb-2 bold">Poster</label>
                                <input type="text" class="theme-input-style" id="poster" name="poster"
                                    placeholder="Enter Poster Link">
                            </div>
                            <div class="form-group mb-4">
                                <label for="title" class="mb-2 bold">Title</label>
                                <input type="text" class="theme-input-style" id="title" name="title"
                                    placeholder="Enter Movie title">
                            </div>
                            <div class="form-group mb-4">
                                <label for="category" class="mb-2 bold d-block">Category</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="category" name="category">
                                        <option value="">Pilih</option>
                                        @foreach($category as $c)
                                        <option value="{{ $c->slug }}">{{ $c->category_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="sub_category" class="mb-2 bold d-block">Sub Category</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="sub_category" name="sub_category">
                                        <option value="">Pilih</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="year" class="mb-2 bold">Year</label>
                                <input type="text" class="theme-input-style" id="year" name="year"
                                    placeholder="Enter Movie Year">
                            </div>
                            <div class="form-group mb-4">
                                <label for="rated" class="mb-2 bold">Rated</label>
                                <input type="text" class="theme-input-style" id="rated" name="rated"
                                    placeholder="Enter Movie Rated">
                            </div>
                            <div class="form-group mb-4">
                                <label for="released" class="mb-2 bold">Released Date</label>
                                <input type="text" class="theme-input-style" id="released" name="released"
                                    placeholder="Enter Movie Released Date">
                            </div>
                            <div class="form-group mb-4">
                                <label for="run_time" class="mb-2 bold">Run Time</label>
                                <input type="text" class="theme-input-style" id="run_time" name="run_time"
                                    placeholder="Enter Movie Run Time">
                            </div>
                            <div class="form-group mb-4">
                                <label for="genre" class="mb-2 bold">Genre</label>
                                <input type="text" class="theme-input-style" id="genre" name="genre"
                                    placeholder="Enter Movie Genre">
                            </div>
                            <div class="form-group mb-4">
                                <label for="director" class="mb-2 bold">Director</label>
                                <input type="text" class="theme-input-style" id="director" name="director"
                                    placeholder="Enter Movie Director">
                            </div>
                            <div class="form-group mb-4">
                                <label for="writer" class="mb-2 bold">Writer</label>
                                <input type="text" class="theme-input-style" id="writer" name="writer"
                                    placeholder="Enter Movie Writer">
                            </div>
                            <div class="form-group mb-4">
                                <label for="actors" class="mb-2 bold">Actors</label>
                                <input type="text" class="theme-input-style" id="actors" name="actors"
                                    placeholder="Enter Movie Actors">
                            </div>
                            <div class="form-group mb-4">
                                <label for="plot" class="mb-2 bold d-block">Plot</label>
                                <textarea id="plot" name="plot" class="theme-input-style" placeholder="Enter Movie Plot"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="download" class="mb-2 bold d-block">Download Text</label>
                                <textarea id="download" name="download" class="theme-input-style" placeholder="Enter Download Text"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="is_banner" class="mb-2 bold d-block">Use In Banner</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="is_banner" name="is_banner">
                                        <option value="">Pilih</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="is_popular" class="mb-2 bold d-block">Use In Popular</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="is_popular" name="is_popular">
                                        <option value="">Pilih</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="is_new" class="mb-2 bold d-block">Use In New Added</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="is_new" name="is_new">
                                        <option value="">Pilih</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="is_anime" class="mb-2 bold d-block">Use In Anime</label>
                                <div class="custom-select style--two">
                                    <select class="theme-input-style" id="is_anime" name="is_anime">
                                        <option value="">Pilih</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="language" class="mb-2 bold">Language</label>
                                <input type="text" class="theme-input-style" id="language" name="language"
                                    placeholder="Enter Movie language">
                            </div>
                            <div class="form-group mb-4">
                                <label for="country" class="mb-2 bold">Country</label>
                                <input type="text" class="theme-input-style" id="country" name="country"
                                    placeholder="Enter Movie country">
                            </div>
                            <div class="form-group mb-4">
                                <label for="awards" class="mb-2 bold">Awards</label>
                                <input type="text" class="theme-input-style" id="awards" name="awards"
                                    placeholder="Enter Movie awards">
                            </div>
                            <div class="form-group mb-4">
                                <label for="ratings" class="mb-2 bold">Ratings</label>
                                <input type="text" class="theme-input-style" id="ratings" name="ratings"
                                    placeholder="Enter Movie ratings">
                            </div>
                            <div class="form-group mb-4">
                                <label for="metascore" class="mb-2 bold">Metascore</label>
                                <input type="text" class="theme-input-style" id="metascore" name="metascore"
                                    placeholder="Enter Movie metascore">
                            </div>
                            <div class="form-group mb-4">
                                <label for="imdb_rating" class="mb-2 bold">IMDB Rating</label>
                                <input type="text" class="theme-input-style" id="imdb_rating" name="imdb_rating"
                                    placeholder="Enter IMDB Rating">
                            </div>
                            <div class="form-group mb-4">
                                <label for="imdb_votes" class="mb-2 bold">IMDB Votes</label>
                                <input type="text" class="theme-input-style" id="imdb_votes" name="imdb_votes"
                                    placeholder="Enter IMDB Votes">
                            </div>
                            <div class="form-group mb-4">
                                <label for="type" class="mb-2 bold">Type</label>
                                <input type="text" class="theme-input-style" id="type" name="type"
                                    placeholder="Enter Movie type">
                            </div>
                            <div class="form-group mb-4">
                                <label for="dvd" class="mb-2 bold">DVD</label>
                                <input type="text" class="theme-input-style" id="dvd" name="dvd"
                                    placeholder="Enter Movie dvd">
                            </div>
                            <div class="form-group mb-4">
                                <label for="box_office" class="mb-2 bold">Box Office</label>
                                <input type="text" class="theme-input-style" id="box_office" name="box_office"
                                    placeholder="Enter Movie Box office">
                            </div>
                            <div class="form-group mb-4">
                                <label for="production" class="mb-2 bold">Production</label>
                                <input type="text" class="theme-input-style" id="production" name="production"
                                    placeholder="Enter Movie production">
                            </div>
                            <div class="form-group mb-4">
                                <label for="website" class="mb-2 bold">Website</label>
                                <input type="text" class="theme-input-style" id="website" name="website"
                                    placeholder="Enter Movie website">
                            </div>
                            <div class="form-group mb-4">
                                <label for="slug" class="mb-2 bold">Slug</label>
                                <input type="text" class="theme-input-style" id="slug" name="slug"
                                    placeholder="Enter Movie slug">
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
