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

        <link href="css/transparentform.css" rel="stylesheet" type="text/css" media="all" />

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src="js/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#editor",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste "
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter      alignright alignjustify | bullist numlist outdent indent | link image"
            });

        </script>



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
                                    <a href="socialnetworking" style="color:white !important">
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
                            @yield('image_1')
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-6 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                @yield('form_1')

                            </div>
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>

                            <div class="row">
                                @yield('description_1')
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>

                    <li class="image-bg pt-xs-240 pb-xs-240">
                        <div class="background-image-holder">
                            @yield('image_2')
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-6 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                @yield('form_2')

                            </div>
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>
                            <div class="row">
                                @yield('description_2')
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>

                    <li class="image-bg pt-xs-240 pb-xs-240">
                        <div class="background-image-holder">
                            @yield('image_3')
                        </div>
                        <div class="formdiv">
                            <div class="col-md-5 col-sm-6 col-xs-12 text-center-xs mb-xs-24 transparentform container">
                                <br>
                                @yield('form_3')

                            </div>
                        </div>
                        <div class="align-bottom">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr class="mb24">
                                </div>
                            </div>
                            <div class="row">
                                @yield('description_3')
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>
                </ul>
            </section>
            <footer class="footer-1 bg-dark">
                <div class="container" id="footerdiv">

                    @yield('comments')

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
            $(document).on('click', '.heart-empty', function () {
                var comment_id = $(this).prev().text();
                var url = '';
                if (topic == "socialnetworking") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'socialnetworkcomment/' + comment_id;
                    } else {
                        var url = 'socialnetworkreply/' + comment_id;
                    }
                } else if (topic == "equalityofwomen") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'equalityofwomencomment/' + comment_id;
                    } else {
                        var url = 'equalityofwomenreply/' + comment_id;
                    }
                }else if (topic == "economic-development") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'economic-developmentcomment/' + comment_id;
                    } else {
                        var url = 'economic-developmentreply/' + comment_id;
                    }
                }

                var likes = parseInt($(this).next().text()) + 1;
                var element = $(this);

                if ($.cookie(comment_id) != null) {
                    if ($.cookie(comment_id) == "voted") {
                        var likes = parseInt($(this).next().text()) - 1;
                        jQuery.ajax({
                            type: "POST",
                            url: url + '?_method=PUT',
                            dataType: 'json',
                            data: {likes: likes},
                            success: function (obj, textstatus) {
                                if (obj == 'successfully_liked') {
                                    if (likes <= 0) {
                                        element.removeClass('heart-fill');
                                        element.removeClass('glyphicon-heart');
                                        element.addClass('glyphicon-heart-empty');
                                        element.addClass('heart-empty');
                                    }
                                    element.next().text(likes);
                                    $.cookie(comment_id, 'unvoted', {expires: 365 * 10});
                                }
                            }
                        });
                    } else {
                        var likes = parseInt($(this).next().text()) + 1;
                        jQuery.ajax({
                            type: "POST",
                            url: url + '?_method=PUT',
                            dataType: 'json',
                            data: {likes: likes},
                            success: function (obj, textstatus) {
                                if (obj == 'successfully_liked') {
                                    if (likes > 0) {
                                        element.removeClass('heart-empty');
                                        element.removeClass('glyphicon-heart-empty');
                                        element.addClass('glyphicon-heart');
                                        element.addClass('heart-fill');
                                    }
                                    element.next().text(likes);
                                    $.cookie(comment_id, 'voted', {expires: 365 * 10});
                                }
                            }
                        });
                    }
                } else {
                    var likes = parseInt($(this).next().text()) + 1;
                    jQuery.ajax({
                        type: "POST",
                        url: url + '?_method=PUT',
                        dataType: 'json',
                        data: {likes: likes},
                        success: function (obj, textstatus) {
                            if (obj == 'successfully_liked') {
                                if (likes > 0) {
                                    element.removeClass('heart-empty');
                                    element.removeClass('glyphicon-heart-empty');
                                    element.addClass('glyphicon-heart');
                                    element.addClass('heart-fill');
                                }
                                element.next().text(likes);
                                $.cookie(comment_id, 'voted', {expires: 365 * 10});
                            }
                        }
                    });

                }
            });


            $(document).on('click', '.heart-fill', function () {

                var comment_id = $(this).prev().text();
                var url = '';
                if (topic == "socialnetworking") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'socialnetworkcomment/' + comment_id;
                    } else {
                        var url = 'socialnetworkreply/' + comment_id;
                    }
                } else if (topic == "equalityofwomen") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'equalityofwomencomment/' + comment_id;
                    } else {
                        var url = 'equalityofwomenreply/' + comment_id;
                    }
                }else if (topic == "economic-development") {
                    if ($(this).prev().prev().text() == "comment") {
                        var url = 'economic-developmentcomment/' + comment_id;
                    } else {
                        var url = 'economic-developmentreply/' + comment_id;
                    }
                }
                var element = $(this);

                if ($.cookie(comment_id) != null) {
                    if ($.cookie(comment_id) == "voted") {
                        var likes = parseInt($(this).next().text()) - 1;
                        jQuery.ajax({
                            type: "POST",
                            url: url + '?_method=PUT',
                            dataType: 'json',
                            data: {likes: likes},
                            success: function (obj, textstatus) {
                                if (obj == 'successfully_liked') {
                                    if (likes == 0) {
                                        element.removeClass('heart-fill');
                                        element.removeClass('glyphicon-heart');
                                        element.addClass('glyphicon-heart-empty');
                                        element.addClass('heart-empty');
                                    }
                                    element.next().text(likes);
                                    $.cookie(comment_id, 'unvoted', {expires: 365 * 10});
                                }
                            }
                        });
                    } else {
                        var likes = parseInt($(this).next().text()) + 1;
                        jQuery.ajax({
                            type: "POST",
                            url: url + '?_method=PUT',
                            dataType: 'json',
                            data: {likes: likes},
                            success: function (obj, textstatus) {
                                if (obj == 'successfully_liked') {
                                    if (likes == 0) {
                                        element.removeClass('heart-fill');
                                        element.removeClass('glyphicon-heart');
                                        element.addClass('glyphicon-heart-empty');
                                        element.addClass('heart-empty');
                                    }
                                    element.next().text(likes);
                                    $.cookie(comment_id, 'voted', {expires: 365 * 10});
                                }
                            }
                        });
                    }
                } else {
                    var likes = parseInt($(this).next().text()) + 1;
                    jQuery.ajax({
                        type: "POST",
                        url: url + '?_method=PUT',
                        dataType: 'json', data: {likes: likes},
                        success: function (obj, textstatus) {
                            if (obj == 'successfully_liked') {
                                if (likes == 0) {
                                    element.removeClass('heart-fill');
                                    element.removeClass('glyphicon-heart');
                                    element.addClass('glyphicon-heart-empty');
                                    element.addClass('heart-empty');
                                }
                                element.next().text(likes);
                                $.cookie(comment_id, 'voted', {expires: 365 * 10});
                            }
                        }
                    });
                }

            });
        </script>
        <script>
            var isReply = '';
            var comment_id = '';
            $('.reply').click(function () {
                isReply = true;
                comment_id = $(this).prev().text();
                $('#texteditor').show('slow');
                var quote = '[Re: <i><b>' + $(this).parent().parent().prev().text() + '</b></i>]<br>';
                var editor = 'editor';
                tinyMCE.get('editor').setContent(quote);
            });
        </script>
        <script>
            $('#postcomment').click(function () {
                isReply = false;
                $('#texteditor').show('slow');
            });
        </script>
        <script>
            $('#post-btn').click(function (e) {
                e.preventDefault();
                var content = tinymce.get("editor").getContent().replace('"', '\"');
                var name = $('#post-name').val();
                var club = $('#post-club').val();
                var country = $('#post-country').val();
                var topic = $('#topic').val();
                var url = '';

                if (!isReply) {
                    if (topic == 'socialnetworking') {
                        url = 'socialnetworkcomment';

                    } else if (topic == 'equalityofwomen') {
                        url = 'equalityofwomencomment';
                    }else if(topic=="economic-development"){
                        url = 'economic-developmentcomment';
                    }
                    jQuery.ajax({type: "POST", url: url,
                        dataType: 'json', data: {comment: content, name: name, club: club, country: country, topic: topic},
                        success: function (obj, textstatus) {
                            if (obj == 'successfully_stored') {
                                $('#posted-comment-div').append("<div class=\"box box-success\">" +
                                        "<div class=\"box-header with-border\">" +
                                        "<div class=\"row\">" +
                                        " <div class=\"col-md-11\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" style=\"color:gray\"></span><b style=\"font-size: 16px\"> " + name + "</b>" +
                                        "<span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\" style=\"color:gray;padding-left:1em\"></span>" + club +
                                        "<span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\" style=\"color:gray;padding-left:1em\"></span>" + country + "</div>" +
                                        "<div class=\"col-md-1\">" +
                                        "<span class=\"glyphicon glyphicon-heart-empty heart-empty\" aria-hidden=\"true\" style=\"color:red;font-size: 16px;\"></span>&nbsp;<b style=\"color:red;\">0</b>" +
                                        "</div>" +
                                        "</div>" +
                                        "</div>" +
                                        "<div class=\"box-body\">" +
                                        "<p style=\"color:gray !important;font-size:15px;\">" +
                                        content +
                                        "</p>" +
                                        "<div class=\"container\" > " +
                                        "<button class=\"btn btn-primary btn-sm pull-right\" style=\"color: white;margin-bottom: 0px;margin-top: 0px;\">Reply</button>" +
                                        "</div>" +
                                        "</div>" +
                                        "</div>");
                            }
                        }
                    });
                } else {
                    if (topic == 'socialnetworking') {
                        url = 'socialnetworkreply';

                    } else if (topic == 'equalityofwomen') {
                        url = 'equalityofwomenreply';
                    }else if (topic == 'economic-development') {
                        url = 'economic-developmentreply';
                    }
                    jQuery.ajax({type: "POST", url: url,
                        dataType: 'json', data: {reply: content, name: name, club: club, country: country, comment_id: comment_id},
                        success: function (obj, textstatus) {
                            if (obj == 'successfully_stored') {
                                $('#posted-comment-div').append("<div class=\"box box-success\">" +
                                        "<div class=\"box-header with-border\">" +
                                        "<div class=\"row\">" +
                                        " <div class=\"col-md-11\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" style=\"color:gray\"></span><b style=\"font-size: 16px\"> " + name + "</b>" +
                                        "<span class=\"glyphicon glyphicon-bookmark\" aria-hidden=\"true\" style=\"color:gray;padding-left:1em\"></span>" + club +
                                        "<span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\" style=\"color:gray;padding-left:1em\"></span>" + country + "</div>" +
                                        "<div class=\"col-md-1\">" +
                                        "<span class=\"glyphicon glyphicon-heart-empty heart-empty\" aria-hidden=\"true\" style=\"color:red;font-size: 16px;\"></span>&nbsp;<b style=\"color:red;\">0</b>" +
                                        "</div>" +
                                        "</div>" +
                                        "</div>" +
                                        "<div class=\"box-body\">" +
                                        "<p style=\"color:gray !important;font-size:15px;\">" +
                                        content +
                                        "</p>" +
                                        "<div class=\"container\" > " +
                                        "<button class=\"btn btn-primary btn-sm pull-right\" style=\"color: white;margin-bottom: 0px;margin-top: 0px;\">Reply</button>" +
                                        "</div>" +
                                        "</div>" +
                                        "</div>");
                            }
                        }
                    });
                }
            });
        </script>

    </body>
</html>