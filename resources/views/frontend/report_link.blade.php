@extends('frontend.master')
@section('content')
    <div class="hero common-hero">
        <div class="container">

        </div>
    </div>
    <!-- blog detail section-->
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="blog-detail-ct">
                        <h1>Report Dead Links</h1>
                        @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        <?= $data->report_dead_link ?>
                        <!-- comment items -->
                        <div class="comments">
                            <h4>{{ $totalComments }} Comments</h4>
                            {{ $comments->links() }}
                            @foreach ($comments as $comment)
                                <div class="cmt-item flex-it">
                                    @php
                                        $name = explode(' ', $comment->name);
                                        // dd($name);
                                    @endphp
                                    <img style="width:50px;"
                                        src="https://avatar.iran.liara.run/username?username={{ $name[0] }} "+"
                                        {{ $name[1] ?? null }}" alt="">
                                    <div class="author-infor">
                                        <div class="flex-it2">
                                            <h6><a href="#">{{ $comment->name }}</a></h6> <span class="time"> -
                                                {{ date('d F Y', strtotime($comment->created_at)) }}</span>
                                        </div>
                                        <input type="hidden" id="name_{{ $comment->id }}" value="{{ $comment->name }}">
                                        <p>{{ $comment->comment }}</p>
                                        <p><a onclick="reply({{ $comment->id }})" class="rep-btn"
                                                href="javascript:void(0);">+ Reply</a></p>
                                    </div>
                                </div>
                                @php
                                    $reply = \App\Models\ReportMessage::where('level', 2)
                                        ->where('sub_level', $comment->id)
                                        ->get();
                                @endphp
                                @foreach ($reply as $rp)
                                    @php
                                        $name = explode(' ', $rp->name);
                                        // dd($name);
                                    @endphp
                                    <div class="cmt-item flex-it reply">
                                        <img style="width:50px;"
                                        src="https://avatar.iran.liara.run/username?username={{ $name[0] }} "+"
                                        {{ $name[1] ?? null }}" alt="">

                                        <div class="author-infor">
                                            <div class="flex-it2">
                                                <h6><a href="#">{{ $rp->name }}</a></h6> <span class="time"> - {{ date('d F Y', strtotime($rp->created_at)) }}</span>
                                            </div>
                                            <p>{{ $rp->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                            {{-- <div class="cmt-item flex-it reply">
                                <img src="images/uploads/author3.png" alt="">
                                <div class="author-infor">
                                    <div class="flex-it2">
                                        <h6><a href="#">Dave McNary</a></h6> <span class="time"> - 27 Mar
                                            2017</span>
                                    </div>
                                    <p>Blue Sky Studios is one of the world’s leading digital animation movie studios and we
                                        are proud of their commitment to stay and grow in Connecticut.</p>
                                </div>
                            </div> --}}

                        </div>
                        <div class="comment-form" id="target-div">
                            <h4 id="message_title">Leave a comment</h4>
                            <p style="display: none;" id="cancel_reply_btn" onclick="cancel_reply()"
                                class="cancel-reply-btn">X Cancel Repy</p>
                            
                            <form method="POST" action="{{ route('comment') }}">
                                @csrf
                                <div class="row">
                                    <input type="hidden" id="level" name="level" value="1">
                                    <input type="hidden" id="sub_level" name="sub_level" value="1">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Email" name="email" required>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="comment" id="" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <input class="submit" type="submit" placeholder="submit">
                            </form>
                        </div>
                        <!-- comment form -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end of  blog detail section-->
@endsection
