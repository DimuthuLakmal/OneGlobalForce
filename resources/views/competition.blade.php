<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>One Global Force</title>
        <meta name="viewport" content="width=device-width, initial-scale=0.9">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom_site.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>

        <link href="css/competition_transparentform.css" rel="stylesheet" type="text/css" media="all" />

        <script src="js/jquery.min.js"></script>




        <script>
            $(function () {
                $('.viewforum').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="nav-container">
            <a id="top"></a>
            <nav class="absolute transparent">
                <div class="nav-bar">
                    <div class="module left oneglobalforce-log">
                        <a href="index.html">
                            <img class="logo logo-light img-responsive" alt="Foundry" src="img/header.png" />
                            <img class="logo logo-dark img-responsive" alt="Foundry" src="img/header-dark.png" />
                        </a>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                        <div class="module left">
                            <ul class="menu">
                                <li>
                                    <a href="economic-development" style="color:white !important">
                                        Economic Development
                                    </a>
                                </li>
                                <li>
                                    <a href="equalityofwomen" style="color:white !important">
                                        Equality of Women
                                    </a>
                                </li>
                                <li>
                                    <a href="competition" style="color:white !important">
                                        Social Networking
                                    </a>
                                </li>
                                <li>
                                    <a href="competition" style="color:white !important">
                                        Competition
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>
        <div class="main-container">
            <section class="kenburns cover fullscreen image-slider slider-arrow-controls controls-inside">
                <ul class="slides">                  
                    <li class="image-bg pt-xs-240 pb-xs-240">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/burns2.jpg" />
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-5 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                <form>
                                    <input name="name" placeholder="What is your name?" class="name" required />
                                    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
                                    <input name="country" placeholder="Where are you from?" class="country"/>
                                    <input name="file" type="file" id="file" style="display: none"/>
                                    <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-12 col-sm-offset-2 text-right text-center-xs">
                                        <a class="btn btn btn-white mt20 viewforum" id="fileuploadbtn" style="color:white !important">UPLOAD YOUR POSTER</a>
                                    </div>
                                    <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-12 col-sm-offset-2 text-right text-center-xs">
                                        <a class="btn btn btn-white mt20 viewforum"  style="color:white !important">SUBMIT</a>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 text-center-xs mb-xs-24 transparentform container preview-div">
                                <br>
                                <img class="img-responsive" width="400" height="200" src="./img/equality.png" id="preview-img">
                            </div>
                            
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                                    <h4 class="uppercase mb0 bold" style="color: white !important">Poster Competition</h4>

                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <p style="color: white !important">
                                        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
                                    </p>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
                                    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View rules</a>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>

                    <li class="image-bg pt-xs-240 pb-xs-240">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/burns3.jpg" />
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-6 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                <form>
                                    <input name="name" placeholder="What is your name?" class="name" required />
                                    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
                                    <input name="country" placeholder="What is your Country?" class="country"  />
                                    <textarea rows="4" cols="50" name="post" placeholder="What is your opinon" class="post" required></textarea>
                                    <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-5 col-xs-12 text-right text-center-xs">
                                        <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">POST</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                                    <h4 class="uppercase mb0 bold" style="color: white !important">Poster Competition</h4>

                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <p style="color: white !important">
                                        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
                                    </p>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
                                    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View rules</a>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>

                    <li class="image-bg pt-xs-240 pb-xs-240">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/burns1.jpg" />
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-6 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                <form>
                                    <input name="name" placeholder="What is your name?" class="name" required />
                                    <input name="rotaract-club" placeholder="What is your Rotaract Club?" class="rotaract-club" required />
                                    <input name="country" placeholder="What is your Country?" class="country"  />
                                    <textarea rows="4" cols="50" name="post" placeholder="What is your opinon" class="post" required></textarea>
                                    <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-5 col-xs-12 text-right text-center-xs">
                                        <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">POST</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                                    <h4 class="uppercase mb0 bold" style="color: white !important">Poster competition</h4>

                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <p style="color: white !important">
                                        To photograph is to hold one's breath, when all faculties converge to capture fleeting reality. It's at that precise moment that mastering an image becomes a great physical and intellectual joy.  
                                    </p>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
                                    <a class="btn btn btn-white mt16 viewforum" href="#footerdiv" style="color:white !important">View rules</a>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>
                </ul>
            </section>
            <footer class="footer-1 bg-dark">
                <div class="container" id="footerdiv">
                    <div class="row">
                        <div id="posted-comment-div">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <div class="row">
                                        <div class="col-md-offset-4">
                                            <span class="glyphicon glyphicon-import" aria-hidden="true" style="color:gray"></span><b style="font-size: 16px"> Rules : Poster competition : One Global Force</b>    
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-offset-1">
                                        <p style="color:gray;font-size: 15px">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true" style="color:gray"></span> Basically poverty is the condition where a person’s basic needs for food clothing and shelter are not being met. 
                                        </p>
                                        <p style="color:gray;font-size: 15px">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true" style="color:gray"></span>  Basically poverty is the condition where a person’s basic needs for food clothing and shelter are not being met. 
                                        </p>
                                        <p style="color:gray;font-size: 15px">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true" style="color:gray"></span> Basically poverty is the condition where a person’s basic needs for food clothing and shelter are not being met. 
                                        </p>
                                        <p style="color:gray;font-size: 15px">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true" style="color:gray"></span> Basically poverty is the condition where a person’s basic needs for food clothing and shelter are not being met. 
                                        </p>
                                        <p style="color:gray;font-size: 15px">
                                            <span class="glyphicon glyphicon-book" aria-hidden="true" style="color:gray"></span> Basically poverty is the condition where a person’s basic needs for food clothing and shelter are not being met. 
                                        </p>
                                    </div>
                                </div><!-- /.box-body-->
                            </div>

                        </div>
                        <div class="container">
                            
                                <button class="btn btn-sm btn-success" style="color: white; display:block; margin: 0 auto;" id="askquestion">Any Question? Ask Us :)</button>
                            
                        </div>
                        <br>
                        <div class="box box-success"style="display: none" id="texteditor">
                            <div class="container">
                                <br>
                                <form method="post" action="#" class="form-horizontal">
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
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="post-country" id="post-country" placeholder="Where are you from?">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">E-mail</label>
                                        <div class="col-sm-8">
                                            <input class="form-control input-sm" name="post-country" id="post-email" placeholder="Your email?">
                                        </div>
                                    </div>
                                    <div class="form-group"><div class="col-sm-8 col-md-offset-2">
                                            <textarea name="content" id="editor" style="width: 100%; background-color: #DFDFDF; color: gray" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                            <button class="btn btn-primary btn-sm" style="color: white;display:block; margin: 0 auto;" id="post-btn">Post</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="sub">&copy; Copyright 2016 - Rotaract Club of University Of Moratuwa</span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of container-->

            </footer>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            $('#askquestion').click(function () {
                $('#texteditor').show('slow');
            });
        </script>
        <script>
            $('#fileuploadbtn').click(function () {
                $('#file').trigger('click');
                $('#preview-div').show('fast');
            });
            
        </script>

    </body>
</html>