@extends('layouts.index-layout')

@section('content')
    <div class="content">
        <!--church caption wrap start-->
        <div class="church_caption_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="church_text">
                            <h3>Church attendance is as vital to a disciple as a transfusion of rich, healthy blood
                                to a sick man.</h3>
                            <p>Fusce vitae ligula dolor. Integer cursus at justo rhoncus voluat. Donec rhoncus enim
                                id urna convallis, quis maximus risus bibendum. Nunc accumsan sapien suscipit elit
                                laoreet, a cursus est luctus. Vivamus et metus nec elit commodo hendrerit in eu mi.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="church_home_fig">
                            <figure>
                                <img src="images/home_img.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--church caption wrap ends-->

        <!--church service post start-->
        <section class="church_service_post">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="church_service_post_fig margin-bottom">
                                    <figure class="overlay">
                                        <img src="{{ asset('assets/extra-images/service-post.jpg')}}" alt="image1" />
                                        <figcaption class="post_fig_text">
                                            <ul class="countdown">
                                                <li>
                                                    <h6 class="days">23</h6><span>Days</span>
                                                </li>
                                                <li>
                                                    <h6 class="hours">36</h6><span>Hours</span>
                                                </li>
                                                <li>
                                                    <h6 class="minutes">50</h6><span>Minutes</span>
                                                </li>
                                                <li>
                                                    <h6 class="seconds">18</h6><span>second</span>
                                                </li>
                                            </ul>
                                            <h6><a href="#">Nunc lorem nunc, feugiat eget digsim sed, congue
                                                    quis felis</a></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="church_service_post_fig margin-bottom">
                                    <figure class="overlay">
                                        <img src="{{ asset('assets/extra-images/service-post1.jpg')}}" alt="image1" />
                                        <figcaption class="post_fig_text">
                                            <ul class="countdown">
                                                <li>
                                                    <h6 class="days">23</h6><span>Days</span>
                                                </li>
                                                <li>
                                                    <h6 class="hours">36</h6><span>Hours</span>
                                                </li>
                                                <li>
                                                    <h6 class="minutes">50</h6><span>Minutes</span>
                                                </li>
                                                <li>
                                                    <h6 class="seconds">18</h6><span>second</span>
                                                </li>
                                            </ul>
                                            <h6><a href="#">Nunc lorem nunc, feugiat digni ssim sed, congue
                                                    quis felis</a></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="church_service_post_fig no-padding">
                                    <figure class="overlay">
                                        <img src="{{ asset('assets/extra-images/service-post2.jpg')}}" alt="image1" />
                                        <figcaption class="post_fig_text">
                                            <ul class="countdown">
                                                <li>
                                                    <h6 class="days">23</h6><span>Days</span>
                                                </li>
                                                <li>
                                                    <h6 class="hours">36</h6><span>Hours</span>
                                                </li>
                                                <li>
                                                    <h6 class="minutes">50</h6><span>Minutes</span>
                                                </li>
                                                <li>
                                                    <h6 class="seconds">18</h6><span>second</span>
                                                </li>
                                            </ul>
                                            <h6><a href="#">Mauris at augue ac est dignissim finibus.ipsum is
                                                    hendrerit, ipsum is hendrerit maximus tellus quis, congue
                                                    erat</a></h6>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="church_service_post_fig responsive_991">
                            <figure class="overlay">
                                <img src="extra-images/service-post3.jpg" alt="image1" />
                                <figcaption class="post_fig_text">
                                    <ul class="countdown">
                                        <li>
                                            <h6 class="days">23</h6><span>Days</span>
                                        </li>
                                        <li>
                                            <h6 class="hours">36</h6><span>Hours</span>
                                        </li>
                                        <li>
                                            <h6 class="minutes">50</h6><span>Minutes</span>
                                        </li>
                                        <li>
                                            <h6 class="seconds">18</h6><span>second</span>
                                        </li>
                                    </ul>
                                    <h6><a href="#">Nunc lorem nunc, feu eget digni ssim sed, congue quis
                                            felis</a></h6>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="church_service_post_fig extra-padding responsive_991">
                            <figure class="overlay">
                                <img src="extra-images/service-post4.jpg" alt="image1" />
                                <figcaption class="post_fig_text">
                                    <ul class="countdown">
                                        <li>
                                            <h6 class="days">23</h6><span>Days</span>
                                        </li>
                                        <li>
                                            <h6 class="hours">36</h6><span>Hours</span>
                                        </li>
                                        <li>
                                            <h6 class="minutes">50</h6><span>Minutes</span>
                                        </li>
                                        <li>
                                            <h6 class="seconds">18</h6><span>second</span>
                                        </li>
                                    </ul>
                                    <h6><a href="#">Nunc lorem nunc, feugiat dignis sim sed, congue quis
                                            felis</a></h6>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--church service post end-->

        <!--church blog medium wrap start-->
        <div class="church_blog_medium_wrap">
            <div class="container">
                <!--church heading aling center color start-->
                <div class="church_heading align_center color">
                    <h3>Our Ministry</h3>
                    <span><sup class="icon-cross"></sup></span>
                </div>
                <!--church heading aling center color end-->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_blog_fig">
                            <figure class="overlay">
                                <img src="extra-images/ch_ministry.jpg" alt="">
                            </figure>
                            <div class="church_blog_fig_text">
                                <h4>Children’s Ministry</h4>
                                <p>Praesent eget metus ligula. In tempus fermentum dui. Praesent tempus velit
                                    facilisis, ultricies nunc sed, sodales mi. Ut quis gravida urna</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_blog_fig">
                            <figure class="overlay">
                                <img src="extra-images/ch_ministry1.jpg" alt="">
                            </figure>
                            <div class="church_blog_fig_text">
                                <h4>Women’s Ministry</h4>
                                <p>Praesent eget metus ligula. In tempus fermentum dui. Praesent tempus velit
                                    facilisis, ultricies nunc sed, sodales mi. Ut quis gravida urna</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_blog_fig">
                            <figure class="overlay">
                                <img src="extra-images/ch_ministry2.jpg" alt="">
                            </figure>
                            <div class="church_blog_fig_text">
                                <h4>Men’s Ministry</h4>
                                <p>Praesent eget metus ligula. In tempus fermentum dui. Praesent tempus velit
                                    facilisis, ultricies nunc sed, sodales mi. Ut quis gravida urna</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--church blog medium wrap ends-->

        <!--church latest wrap start-->
        <div class="church_latest_wrap">
            <!--church heading aling center color start-->
            <div class="church_heading align_center color">
                <h3>Latest Sermons</h3>
                <span><sup class="icon-cross"></sup></span>
            </div>
            <!--church heading aling center color end-->
            <ul class="church_full_row">
                <li>
                    <div class="church_latest_fig">
                        <figure class="overlay">
                            <img src="extra-images/latest.jpg" alt="#">
                        </figure>
                        <div class="church_latest_text">
                            <div class="church_playing-options icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="church_latest_des">
                                <ul class="church_meta_date">
                                    <li><a href="#">Speaker: <span>David Smith</span> ,</a></li>
                                    <li><a href="#">Date: <span>4/25/2017</span> </a></li>
                                </ul>
                                <p>Nullam et pretiquam. Vivamus eu turpis sit amet tortor lobort commodo. Fusce
                                    vitae ligula dolor. Integer cursus at ..</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="church_latest_fig">
                        <figure class="overlay">
                            <img src="extra-images/latest1.jpg" alt="#">
                        </figure>
                        <div class="church_latest_text">
                            <div class="church_playing-options icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="church_latest_des">
                                <ul class="church_meta_date">
                                    <li><a href="#">Speaker: <span>David Smith</span> ,</a></li>
                                    <li><a href="#">Date: <span>4/25/2017</span> </a></li>
                                </ul>
                                <p>Nullam et pretiquam. Vivamus eu turpis sit amet tortor lobort commodo. Fusce
                                    vitae ligula dolor. Integer cursus at ..</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="church_latest_fig">
                        <figure class="overlay">
                            <img src="extra-images/latest2.jpg" alt="#">
                        </figure>
                        <div class="church_latest_text">
                            <div class="church_playing-options icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="church_latest_des">
                                <ul class="church_meta_date">
                                    <li><a href="#">Speaker: <span>David Smith</span> ,</a></li>
                                    <li><a href="#">Date: <span>4/25/2017</span> </a></li>
                                </ul>
                                <p>Nullam et pretiquam. Vivamus eu turpis sit amet tortor lobort commodo. Fusce
                                    vitae ligula dolor. Integer cursus at ..</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="church_latest_fig">
                        <figure class="overlay">
                            <img src="extra-images/latest3.jpg" alt="#">
                        </figure>
                        <div class="church_latest_text">
                            <div class="church_playing-options icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="church_latest_des">
                                <ul class="church_meta_date">
                                    <li><a href="#">Speaker: <span>David Smith</span> ,</a></li>
                                    <li><a href="#">Date: <span>4/25/2017</span> </a></li>
                                </ul>
                                <p>Nullam et pretiquam. Vivamus eu turpis sit amet tortor lobort commodo. Fusce
                                    vitae ligula dolor. Integer cursus at ..</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="church_latest_fig">
                        <figure class="overlay">
                            <img src="extra-images/latest4.jpg" alt="#">
                        </figure>
                        <div class="church_latest_text">
                            <div class="church_playing-options icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="church_latest_des">
                                <ul class="church_meta_date">
                                    <li><a href="#">Speaker: <span>David Smith</span> ,</a></li>
                                    <li><a href="#">Date: <span>4/25/2017</span> </a></li>
                                </ul>
                                <p>Nullam et pretiquam. Vivamus eu turpis sit amet tortor lobort commodo. Fusce
                                    vitae ligula dolor. Integer cursus at ..</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--church latest wrap end-->

        <!--church news wrap start-->
        <div class="church_news_wrap">
            <div class="container">
                <!--church heading aling center color start-->
                <div class="church_heading align_center color">
                    <h3>Latest News</h3>
                    <span><sup class="icon-cross"></sup></span>
                </div>
                <!--church heading aling center color end-->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_news_fig">
                            <figure class="overlay">
                                <img src="extra-images/news.jpg" alt="">
                            </figure>
                            <div class="church_news_text">
                                <h4>Nature protects us all everyway</h4>
                                <ul class="church_meta_date meta_2">
                                    <li><a href="#"><i class="fa fa-user"></i>Jacob Smith</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>4/25/2017 </a></li>
                                </ul>
                                <p>Donec risus mauris, cursus eget tortor nec, lacinia sto. Nullam faucibus ipsum
                                    non tortor mollis, nec rhoncus ipsum eleifend.</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_news_fig">
                            <div class="church_news_text">
                                <h4>Nature protects us all everyway</h4>
                                <ul class="church_meta_date meta_2">
                                    <li><a href="#"><i class="fa fa-user"></i>Jacob Smith</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>4/25/2017 </a></li>
                                </ul>
                                <p>Donec risus mauris, cursus eget tortor nec, lacinia sto. Nullam faucibus ipsum
                                    non tortor mollis, nec rhoncus ipsum eleifend.</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                            <figure class="overlay">
                                <img src="extra-images/news1.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_news_fig">
                            <figure class="overlay">
                                <img src="extra-images/news2.jpg" alt="">
                            </figure>
                            <div class="church_news_text">
                                <h4>Nature protects us all everyway</h4>
                                <ul class="church_meta_date meta_2">
                                    <li><a href="#"><i class="fa fa-user"></i>Jacob Smith</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>4/25/2017 </a></li>
                                </ul>
                                <p>Donec risus mauris, cursus eget tortor nec, lacinia sto. Nullam faucibus ipsum
                                    non tortor mollis, nec rhoncus ipsum eleifend.</p>
                                <a class="default_small_btn btn_2" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--church news wrap end-->

        <!--church causes wrap start-->
        <div class="church_causes_wrap">
            <div class="container">
                <!--church heading aling center color start-->
                <div class="church_heading align_center color">
                    <h3>New Causes</h3>
                    <span><sup class="icon-cross"></sup></span>
                </div>
                <!--church heading aling center color end-->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_causes_fig">
                            <div class="progress-bar position" data-percent="85" data-duration="1000"
                                data-color="#f0f0f0,d1325f">
                                <div class="progress_text">
                                    <h3>85%</h3>
                                    <h5>Pledge of 30,000</h5>
                                    <a class="default_small_btn btn_2" href="#">Donate Now</a>
                                </div>
                            </div>
                            <h4><a href="#">Maecenas et purus a lectus</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_causes_fig">
                            <div class="progress-bar position" data-percent="85" data-duration="1000"
                                data-color="#f0f0f0,d1325f">
                                <div class="progress_text">
                                    <h3>85%</h3>
                                    <h5>Pledge of 30,000</h5>
                                    <a class="default_small_btn btn_2" href="#">Donate Now</a>
                                </div>
                            </div>
                            <h4><a href="#">Maecenas et purus a lectus</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="church_causes_fig">
                            <div class="progress-bar position" data-percent="85" data-duration="1000"
                                data-color="#f0f0f0,d1325f">
                                <div class="progress_text">
                                    <h3>85%</h3>
                                    <h5>Pledge of 30,000</h5>
                                    <a class="default_small_btn btn_2" href="#">Donate Now</a>
                                </div>
                            </div>
                            <h4><a href="#">Maecenas et purus a lectus</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--church causes wrap end-->

        <!--church postar wrap start-->
        <div class="church_postor_wrap overlay">
            <div class="container">
                <!--church postar row start-->
                <div class="church_postor_row">
                    <div class="church_postor_fig">
                        <figure>
                            <img src="extra-images/postar.jpg" alt="">
                        </figure>
                        <div class="church_postor_text">
                            <h4>Jacob Hayden</h4>
                            <h6>Pastor</h6>
                            <p>Donec ac dolor vel massa elementum tempus at a magna. Fusce risus nunc, dignissim
                                lobortis eros vel, sollicitudin dignissim magna. Nam facilisis vel est et malesuada.
                                Etiam rhoncus vehicula tellus sed ultrices. Ut a augue mi. Maecenas ante purus,
                                scelerisque..</p>
                        </div>
                    </div>
                </div>
                <!--church postar row end-->
            </div>
        </div>
        <!--church postar wrap end-->

        <!--church blog post wrap start-->
        <div class="church_blog_post_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="church_blog_post_row">
                            <div class="church_blog_post_fig">
                                <figure class="overlay">
                                    <img src="extra-images/countdown_element.jpg" alt="">
                                </figure>
                                <div class="church_blog_post_text">
                                    <h4>Sed hendrerit elit mauris a elementum</h4>
                                    <div class="post_comment">
                                        <span>Organizer: David Smith</span>
                                        <i>,</i>
                                        <a href="#"> Comments: 13</a>
                                    </div>
                                    <ul class="countdown">
                                        <li>
                                            <h3 class="days">23</h3><span>Days</span>
                                        </li>
                                        <li>
                                            <h3 class="hours">36</h3><span>Hours</span>
                                        </li>
                                        <li>
                                            <h3 class="minutes">50</h3><span>Minutes</span>
                                        </li>
                                        <li>
                                            <h3 class="seconds">18</h3><span>second</span>
                                        </li>
                                    </ul>
                                    <p>Proin semper ipsum accumsan euismod blandit. Cras faucibus consectetur diam,
                                        vitae ornare ninterdum sed. Cras accumsan ultricies neque ac mattis.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="post_img_list">
                                        <figure class="overlay">
                                            <img src="extra-images/countdown_element1.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="post_img_list">
                                        <figure class="overlay">
                                            <img src="extra-images/countdown_element2.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="post_img_list">
                                        <figure class="overlay">
                                            <img src="extra-images/countdown_element3.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ch_ourshop_column">
                            <figure>
                                <img src="extra-images/shop_items_01.png" alt="">
                            </figure>
                            <div class="church_ourshop_content">
                                <small>TShirt</small>
                                <ul class="rateing_stars">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="clearfix"></div>
                                <h5 class="pull-left"><a href="#">Menswear Shirt</a></h5>
                                <h5 class="pull-right">10$</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--church blog post wrap end-->

        <!--church prayer block start-->
        <div class="church_prayer_block height padding-0">
            <div class="container">
                <div class="church_prayer_detail padding">
                    <h3>You can always make a Differnce <br>With belief.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in convallis odio. Cras dui ex,
                        ullamcorper eget rhoncus id, consequat non tortor.</p>
                    <a href="#" class="default_btn black-bg_btn">Join Us Now</a>
                </div>
                <div class="pull-right">
                    <figure>
                        <img src="extra-images/prayer_short_img1.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <!--church prayer block end-->
    </div>
@endsection
