<!doctype html>

<html lang="en" class="no-js">

<head>
    <title>Blog Site</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/mite-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<!-- Container -->
<div id="container">

    <?php include('include/header.php'); ?>

    <!-- top-images-section
        ================================================== -->
    <section class="top-images-section">
        <div class="container">
            <div class="top-images-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="news-post image-post">
                            <img src="upload/blog/a1.jpg" alt="">
                            <div class="hover-post text-center">
                                <a class="category-link" href="#">Travel</a>
                                <h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
                                <ul class="post-tags">
                                    <li>by <a href="#">Stan Enemy</a></li>
                                    <li>3 days ago</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-post image-post">
                            <img src="upload/blog/a2.jpg" alt="">
                            <div class="hover-post text-center">
                                <a class="category-link" href="#">Travel</a>
                                <h2><a href="single-post.html">Quisque volutpat mattis eros felis facilisis.</a></h2>
                                <ul class="post-tags">
                                    <li>by <a href="#">Stan Enemy</a></li>
                                    <li>3 days ago</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-post image-post">
                            <img src="upload/blog/a3.jpg" alt="">
                            <div class="hover-post text-center">
                                <a class="category-link" href="#">Food</a>
                                <h2><a href="single-post.html">Vestibulum auctor dapibus.</a></h2>
                                <ul class="post-tags">
                                    <li>by <a href="#">Stan Enemy</a></li>
                                    <li>3 days ago</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-images section -->

    <!-- fresh-section
        ================================================== -->
    <section class="fresh-section">
        <div class="container">
            <div class="title-section text-center">
                <h1>Fresh Stories</h1>
            </div>
            <div class="fresh-box owl-wrapper">

                <div class="owl-carousel" data-num="4">

                    <div class="item">
                        <div class="news-post standard-post">
                            <div class="image-holder">
                                <a href="single-post.html"><img src="upload/blog/p1.jpg" alt=""></a>
                            </div>
                            <a class="text-link" href="#">Food</a>
                            <h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
                            <ul class="post-tags">
                                <li>by <a href="#">Stan Enemy</a></li>
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post standard-post">
                            <div class="image-holder">
                                <a href="single-post.html"><img src="upload/blog/p2.jpg" alt=""></a>
                            </div>
                            <a class="text-link" href="#">Lifestyle</a>
                            <h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
                            <ul class="post-tags">
                                <li>by <a href="#">Stan Enemy</a></li>
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post standard-post">
                            <div class="image-holder">
                                <a href="single-post.html"><img src="upload/blog/p3.jpg" alt=""></a>
                            </div>
                            <a class="text-link" href="#">Travel</a>
                            <h2><a href="single-post.html">Vestibulum auctor dapibus neque.</a></h2>
                            <ul class="post-tags">
                                <li>by <a href="#">Stan Enemy</a></li>
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post standard-post">
                            <div class="image-holder">
                                <a href="single-post.html"><img src="upload/blog/p4.jpg" alt=""></a>
                            </div>
                            <a class="text-link" href="#">Travel</a>
                            <h2><a href="single-post.html">Praesent placerat risus quiseros.</a></h2>
                            <ul class="post-tags">
                                <li>by <a href="#">Stan Enemy</a></li>
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post standard-post">
                            <div class="image-holder">
                                <a href="single-post.html"><img src="upload/blog/p1.jpg" alt=""></a>
                            </div>
                            <a class="text-link" href="#">Food</a>
                            <h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
                            <ul class="post-tags">
                                <li>by <a href="#">Stan Enemy</a></li>
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
    </section>
    <!-- End fresh section -->

    <!-- latest-section
			================================================== -->
    <section class="latest-section">
        <div class="container">
            <div class="title-section">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Latest Posts</h1>
                    </div>
                    <div class="col-md-7">
                        <ul class="filter-list filter">
                            <li><a href="#" class="active" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".lifestyle">Lifestyle</a></li>
                            <li><a href="#" data-filter=".food">Food</a></li>
                            <li><a href="#" data-filter=".travel">Travel</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="latest-box iso-call">
                <div class="item food">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l1.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Food</a>
                        <h2><a href="single-post.html">Nullam malesuada eratut turpis.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item lifestyle">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l2.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Lifestyle</a>
                        <h2><a href="single-post.html">Aliquam erat volutpat.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item lifestyle">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l3.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Lifestyle</a>
                        <h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item travel">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l4.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Travel</a>
                        <h2><a href="single-post.html">Praesent dapibus neque.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item travel">
                    <div class="news-post image-post">
                        <img src="upload/blog/home2/l5.jpg" alt="">
                        <div class="hover-post">
                            <a class="category-link" href="#">Travel</a>
                            <h2><a href="single-post.html">Aliquam erat volutpat.</a></h2>
                            <ul class="post-tags">
                                <li>1 day ago</li>
                                <li><a href="#">1 comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item travel">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l6.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Travel</a>
                        <h2><a href="single-post.html">Morbi in sem quisdui.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item food">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l7.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Food</a>
                        <h2><a href="single-post.html">Nam duimi, tincidunt quis.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item lifestyle">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l8.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Lifestyle</a>
                        <h2><a href="single-post.html">Quisque a lectus. </a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
                <div class="item food">
                    <div class="news-post article-post">
                        <div class="image-holder">
                            <img src="upload/blog/home2/l9.jpg" alt="">
                        </div>
                        <a class="text-link" href="#">Food</a>
                        <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus.</a></h2>
                        <ul class="post-tags">
                            <li>3 days ago</li>
                            <li><a href="#">3 comments</a></li>
                            <li>by <a href="#">John Smith</a></li>
                        </ul>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt ...</p>
                    </div>
                </div>
            </div>

            <div class="center-button">
                <a class="button-one" href="#">Load More</a>
            </div>

        </div>
    </section>
    <!-- End latest section -->

    <!-- Subscribe section
        ================================================== -->
    <section class="subscribe-section">
        <div class="container">
            <div class="subscribe-box">
                <div class="subscribe-title">
                    <h2>Join Our Newsletter</h2>
                    <p>Sign up for our free newsletters to receive the latest news. Don't worry we won't do spam.</p>
                </div>
                <form class="subscribe-form">
                    <input type="text" name="email2" id="email2" placeholder="Enter your Email Address"/>
                    <button type="submit" id="submit-subscribe-form">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe section -->

    <!-- video section
        ================================================== -->
    <section class="video-section">
        <div class="container">
            <div class="title-section white-style text-center">
                <h1>Popular Video</h1>
            </div>
            <div class="video-box owl-wrapper">

                <div class="owl-carousel" data-num="3">

                    <div class="item">
                        <div class="news-post video-post">
                            <div class="image-holder">
                                <img src="upload/blog/v1.jpg" alt="">
                                <div class="hover-video">
                                    <a class="video-link iframe" href="https://vimeo.com/81102131"><span><i
                                                    class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                            <a class="text-link" href="#">Food</a>
                            <h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
                            <ul class="post-tags">
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post video-post">
                            <div class="image-holder">
                                <img src="upload/blog/v2.jpg" alt="">
                                <div class="hover-video">
                                    <a class="video-link iframe" href="https://vimeo.com/81102131"><span><i
                                                    class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                            <a class="text-link" href="#">Lifestyle</a>
                            <h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
                            <ul class="post-tags">
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post video-post">
                            <div class="image-holder">
                                <img src="upload/blog/v3.jpg" alt="">
                                <div class="hover-video">
                                    <a class="video-link iframe" href="https://vimeo.com/81102131"><span><i
                                                    class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                            <a class="text-link" href="#">Travel</a>
                            <h2><a href="single-post.html">Vestibulum auctor dapibus neque.</a></h2>
                            <ul class="post-tags">
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news-post video-post">
                            <div class="image-holder">
                                <img src="upload/blog/v1.jpg" alt="">
                                <div class="hover-video">
                                    <a class="video-link iframe" href="https://vimeo.com/81102131"><span><i
                                                    class="fa fa-play"></i></span></a>
                                </div>
                            </div>
                            <a class="text-link" href="#">Food</a>
                            <h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
                            <ul class="post-tags">
                                <li>3 days ago</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End video section -->

    <!-- footer
        ================================================== -->
    <?php include('include/footer.php'); ?>
    <!-- End footer -->

</div>
<!-- End Container -->

<div class="preloader">
    <img alt="" src="images/loader.gif">
</div>

<script src="js/mite-plugins.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/mite-demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2023 11:37:17 GMT -->
</html>