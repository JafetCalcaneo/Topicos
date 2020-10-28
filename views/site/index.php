<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!--<header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">Shahala</h2>
            <nav class="nav nav-fill mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://facebook.com/fh5co" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/fh5co" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-rss"></i></a>
                </li>
            </nav>


            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                        <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="article.html">NEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article.html">HISTORY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CULTURE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TECH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LIFE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">OPINION</a>
                            </li>
                            <li class="nav-item">
                                <form action="" method="POST">
                                    <div class="input-group mt-0 mx-auto" style="width:16px;">

                                        <div class="">
                                            <img src="assets/images/search-icon.png" id="toggle-search"
                                                class="ml-2 toggle-search" alt="search icon">
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="assets/images/left-img.jpg" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>Spirituality</p>
                        <hr />
                        <h2>
                            </h2>
                        <a href="article.html" class="btn">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card">
                    <img class="card-img" src="assets/images/right-img.jpg" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>DECOR</p>
                        <hr />
                        <h2>
                            </h2>
                        <a href="article.html" class="btn">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pr-0 first">
                <div class="card">
                    <img class="card-img" src="assets/images/architecture.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Architecture</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="assets/images/interior.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Interior</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="assets/images/food.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Food</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 last">
                <div class="card">
                    <img class="card-img" src="assets/images/travel.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Travel</h5>
                    </div>
                </div>
            </div>
        </div>

    </header> --> 

    <div class="container-fluid video-player">
        <div class="container">
            <div class="screen embed-responsive embed-responsive-16by9">
                <iframe id="screen" src="https://www.youtube.com/embed/YE7VzlLtp-4" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

            <div class="play-list">
                <div class="owl-carousel owl-carousel4 owl-theme">
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/ujPNSC4JllE" src="assets/images/play1.png"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/rMT8CffVFMk" src="assets/images/play2.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/bGC9f1Po6Q8" src="assets/images/play3.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/yHk_sypSiXU" src="assets/images/play4.png"
                                alt="">

                        </div>
                    </div>
                    <div>
                        <div class="card"> <img class="card-img link-img"
                                data-link="https://www.youtube.com/embed/7yoqm-kgKEk" src="assets/images/play5.png"
                                alt="">

                        </div>
                    </div>
                </div>
            </div>
            <hr>



            <div class="row vr-gallery">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="assets/images/gallery-img1.png" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>
                                To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage from it? But who has any right to find fault with a man
                                who chooses...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover1.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4 pr-0 pd-md">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/gallery-img2.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="contact-box">
                                <p><small>march 27, 2020</small></p>
                                <h3>Trendy Summer
                                    Fashion</h3>
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                    some advantage from it? fault with a man who chooses...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/gallery-img3.jpg" alt="">
                        <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, some
                                advantage from it? fault with a man who chooses...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md">
                            <img src="assets/images/gallery-img4.jpg" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>march 27, 2020</small></p>
                            <h3>Trendy Summer
                                Fashion</h3>
                            <p>
                                To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage from it? But who has any right to find fault with a man
                                who chooses...
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img h-100" src="assets/images/video-cover2.jpg" alt="">
                        <div class="card-img-overlay opacity text-center">
                            <a class="play-1" href="https://www.youtube.com/watch?v=vpO8sZDxOGI"><img
                                    src="assets/images/play-icon.png" alt=""></a>
                            <h5 class="card-title">Weekend In Boston</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <a href="#" class="btn">LOAD MORE</a>

                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid fh5co-recent-news mt-5 pb-5">
        <h2 class="text-uppercase text-center">Recent News</h2>
        <hr class="mx-auto" />

        <div class="play-list mt-5 pt-4">
            <div class="owl-carousel owl-carousel5 owl-theme">
                <div>

                    <div class="card"> <img class="card-img link-img" src="assets/images/news6.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news2.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news3.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news5.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news6.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card"> <img class="card-img link-img" src="assets/images/news4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-area"><a href="#" class="text-center d-block"><i
                                        class="far fa-heart"></i></a></div>
                            <div class="bottom-area">
                                <div class="row">
                                    <div class="col-5 pr-0 text-white">
                                        <a href="#" class="text-white"> <i class="fas fa-retweet"></i> Share</a>
                                    </div>
                                    <div class="col  pl-0   text-right"><a href="#" class="text-white"> June 3, 2019
                                            &nbsp; 6 <i class="far fa-comments"></i></a></div>
                                </div>
                                <h4 class="text-white mt-2">Xiaomi Hao Gertion Hones</h4>
                                <p class="text-white">Jhone Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid jumbotron-fluid stay mt-5 pt-5 pb-5">
        <h2 class="text-center">Stay Updated</h2>
        <p class="text-center mt-2">Sign up for our newsletter to receive the latest news and event postings.</p>
        <div class="input-group mt-4 mx-auto" style="max-width: 640px">
            <input type="email" class="form-control" placeholder="YOUR EMAIL ADDRESS">
            <div class="">
                <button class="btn btn-success ml-2" type="submit">SIGN UP</button>
            </div>
        </div>
    </div>

    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.yu2fvl.js"></script>
    <script src="assets/js/main.js"></script>
    