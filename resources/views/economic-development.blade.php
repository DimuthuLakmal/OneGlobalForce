@extends('header')

@section('image_1')
<img alt="image" class="background-image" src="img/burns2.jpg" />
@stop

@section('form_1')
<form>
    <input name="name" placeholder="What is your name?" class="name" required />
    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
    <input name="country" placeholder="What is your Country?" class="country"  />
    <textarea rows="4" cols="50" name="post" placeholder="What is your opinon" class="post" required></textarea>
    <div class="col-md-6 col-md-offset-5 col-sm-6 col-xs-12 col-sm-offset-5 text-right text-center-xs">
        <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">POST</a>
    </div>
</form>
@stop

@section('description_1')
<div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
    <h4 class="uppercase mb0 bold" style="color: white !important">Economic Development</h4>

</div>
<div class="col-md-4 hidden-sm hidden-xs">
    <p style="color: white !important">
        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
    </p>
</div>
<div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View forum on this topic</a>
</div>
@stop




@section('image_2')
<img alt="image" class="background-image" src="img/burns3.jpg" />
@stop

@section('form_2')
<form>
    <input name="name" placeholder="What is your name?" class="name" required />
    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
    <input name="country" placeholder="What is your Country?" class="country"  />
    <textarea rows="4" cols="50" name="post" placeholder="What is your opinon" class="post" required></textarea>
    <div class="col-md-6 col-md-offset-5 col-sm-6 col-xs-12 col-sm-offset-5 text-right text-center-xs">
        <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">POST</a>
    </div>
</form>
@stop

@section('description_2')
<div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
    <h4 class="uppercase mb0 bold" style="color: white !important">Economic Development</h4>

</div>
<div class="col-md-4 hidden-sm hidden-xs">
    <p style="color: white !important">
        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
    </p>
</div>
<div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View forum on this topic</a>
</div>
@stop




@section('image_3')
<img alt="image" class="background-image" src="img/burns1.jpg" />
@stop

@section('form_3')
<form>
    <input name="name" placeholder="What is your name?" class="name" required />
    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
    <input name="country" placeholder="What is your Country?" class="country"  />
    <textarea rows="4" cols="50" name="post" placeholder="What is your opinon" class="post" required></textarea>
    <div class="col-md-6 col-md-offset-5 col-sm-6 col-xs-12 col-sm-offset-5 text-right text-center-xs">
        <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">POST</a>
    </div>
</form>
@stop

@section('description_3')
<div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
    <h4 class="uppercase mb0 bold" style="color: white !important">Economic Development</h4>

</div>
<div class="col-md-4 hidden-sm hidden-xs">
    <p style="color: white !important">
        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
    </p>
</div>
<div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View forum on this topic</a>
</div>
@stop

@section('comments')
<script>
    var topic = 'economic-development';
</script>
<div class="row">
    <div id="posted-comment-div">

        @foreach($comments as $comment)
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-11"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:gray"></span><b style="font-size: 16px"> {{$comment->name}}</b>
                        <span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="color:gray;padding-left:1em"></span> {{$comment->club}}
                        <span class="glyphicon glyphicon-globe" aria-hidden="true" style="color:gray;padding-left:1em"></span> {{$comment->country}}</div>
                    @if($comment->likes>0)
                    <div class="col-md-1">
                        <span style='display: none'>comment</span>
                        <span style='display: none'>{{$comment->id}}</span>
                        <span class="glyphicon glyphicon-heart heart-fill" aria-hidden="true" style="color:red;font-size: 16px;"></span>&nbsp;<b style="color:red;">{{$comment->likes}}</b>
                    </div>
                    @else
                    <div class="col-md-1">
                        <span style='display: none'>comment</span>
                        <span style='display: none'>{{$comment->id}}</span>
                        <span class="glyphicon glyphicon-heart-empty heart-empty" aria-hidden="true" style="color:red;font-size: 16px;"></span>&nbsp;<b style="color:red;">0</b>
                    </div>

                    @endif

                </div>
            </div>
            <div class="box-body">
                <p style="color:gray;font-size: 15px">
                    {!! $comment->comment !!}
                </p>
                <div class="container">
                    <span style="display: hidden">{{$comment->id}}</span>
                    <button class="btn btn-primary btn-sm pull-right reply" style="color: white;margin-bottom: 0px;margin-top: 0px;">Reply</button>

                </div>
            </div><!-- /.box-body-->
        </div>   
        @foreach($replies as $reply)
        @if($reply->comment_id==$comment->id)

        <div class="box box-success">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-11"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:gray"></span><b style="font-size: 16px"> {{$reply->name}}</b>
                        <span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="color:gray;padding-left:1em"></span> {{$reply->club}}
                        <span class="glyphicon glyphicon-globe" aria-hidden="true" style="color:gray;padding-left:1em"></span> {{$reply->country}}</div>
                    <div class="col-md-1">
                        @if($reply->likes>0)
                        <div class="col-md-1">
                            <span style='display: none'>reply</span>
                            <span style='display: none'>{{$reply->id}}</span>
                            <span class="glyphicon glyphicon-heart heart-fill" aria-hidden="true" style="color:red;font-size: 16px;"></span>&nbsp;<b style="color:red;">{{$reply->likes}}</b>
                        </div>
                        @else
                        <div class="col-md-1">
                            <span style='display: none'>reply</span>
                            <span style='display: none'>{{$reply->id}}</span>
                            <span class="glyphicon glyphicon-heart-empty heart-empty" aria-hidden="true" style="color:red;font-size: 16px;"></span>&nbsp;<b style="color:red;">0</b>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
            <div class="box-body">
                <p style="color:gray;font-size: 15px">
                    {!! $reply->reply !!}
                </p>
                <div class="container">

                    <button class="btn btn-primary btn-sm pull-right reply" style="color: white;margin-bottom: 0px;margin-top: 0px;">Reply</button>

                </div>
            </div><!-- /.box-body-->
        </div>

        @endif
        @endforeach

        @endforeach
    </div>
    <div class="container">

        <button class="btn btn-sm btn-success" style="color: white; display:block; margin: 0 auto;" id="postcomment">Post a comment</button>

    </div>
    <br>
    <div class="box box-success"style="display: none" id="texteditor">
        <div class="container">
            <br>
            <form action='/economic-developmentcomment' method="POST" class='form-horizontal'>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <input  class="form-control" name="post-name" id="post-name" placeholder="What is your name?">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Rotaract Club</label>
                    <div class="col-sm-8">
                        <input  class="form-control" name="post-club" id="post-club" placeholder="What is your rotaract club?">
                    </div>
                </div>
                <input type='hidden' id='topic' name='topic' value='economic-development'>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Country</label>
                    <div class="col-sm-8">
                        <input class="form-control input-sm" name="post-country" id="post-country" placeholder="Where are you from?">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-8 col-md-offset-2">
                        <textarea name="content" id="editor" style="width:100%"></textarea>
                    </div>
                </div>

                <div class="form-group">

                    <button class="btn btn-primary btn-sm" style="color: white;display:block; margin: 0 auto;" id="post-btn">Post</button>

                </div>
            </form>
        </div>
    </div>

</div>

@stop