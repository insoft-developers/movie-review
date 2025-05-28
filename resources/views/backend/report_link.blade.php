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
                            <h4 class="font-20 ">Report Dead Link</h4>
                            <br>
                            <div class="table-responsive">
                                <form method="GET" action="{{ route('comment.search') }}">
                                    <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                                        placeholder="Search Comment...">
                                    
                                    <button type="submit" style="margin-top:20px;">Cari</button>
                                </form>
                                <br>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            {{-- <th>No</th> --}}
                                            <th>Comment</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $index => $c)
                                            <tr>
                                                {{-- <td>{{ $index+1 }}</td> --}}
                                                <td>
                                                    {{ date('d-m-Y H:i', strtotime($c->created_at)) }}<br>
                                                    {{ $c->name }} - {{ $c->email }} <i
                                                        onclick="delete_comment({{ $c->id }})"
                                                        style="color: red;font-size:20px;float:right;cursor: pointer;"
                                                        class="icofont-delete"></i><br><br>
                                                    <blockquote>“ {{ $c->comment }} ”</blockquote>

                                                </td>

                                            </tr>

                                            @php
                                                $subs = \App\Models\ReportMessage::where('level', 2)
                                                    ->where('sub_level', $c->id)
                                                    ->orderBy('id', 'asc')
                                                    ->get();

                                            @endphp
                                            @foreach ($subs as $sub)
                                                <tr>
                                                    @php
                                                        $admin = \App\Models\Admin::where(
                                                            'email',
                                                            $sub->email,
                                                        )->exists();
                                                    @endphp
                                                    @if ($admin)
                                                        <td style="color:yellow;padding-left:150px;">Reply : <br><br>
                                                            {{ date('d-m-Y H:i', strtotime($sub->created_at)) }}<br>
                                                            {{ $sub->name }} - {{ $sub->email }} <i
                                                                onclick="delete_comment({{ $c->id }})"
                                                                style="color: red;font-size:20px;float:right;cursor: pointer;"
                                                                class="icofont-delete"></i><br><br>

                                                            <blockquote>“ {{ $sub->comment }} ”</blockquote>
                                                        </td>
                                                    @else
                                                        <td style="color:rgb(0, 255, 106);padding-left:150px;">Reply :
                                                            <br><br>
                                                            {{ date('d-m-Y H:i', strtotime($sub->created_at)) }}<br>
                                                            {{ $sub->name }} - {{ $sub->email }} <i
                                                                onclick="delete_comment({{ $c->id }})"
                                                                style="color: red;font-size:20px;float:right;cursor: pointer;"
                                                                class="icofont-delete"></i><br><br>

                                                            <blockquote> {{ $sub->comment }} ”</blockquote>
                                                        </td>
                                                    @endif

                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td>
                                                    <textarea id="comment_{{ $c->id }}" class="form-control" placeholder="Jawaban Admin :" style="height:90px;"></textarea>
                                                    <br><button onclick="submit({{ $c->id }})"
                                                        class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $comments->links() }}
                            </div>

                        </div>

                        <!-- Invoice List Table -->
                        <form method="POST" action="{{ route('update.dead.link') }}">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="plot" class="mb-2 bold d-block">Report Instruction</label>
                                        <textarea style="height: 300px;" id="report_dead_link" name="report_dead_link" class="theme-input-style"
                                            placeholder="Enter Download Instruction"><?= $data->report_dead_link ?></textarea>
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
    <!-- End Main Content -->
@endsection
