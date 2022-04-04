@extends('layouts.service')
@section('content')
    <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/1.jpg&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-3"   >сервис бесплатных обьявлений</div>
                            <div class="font-alt mb-30 titan-title-size-4">для частных лиц</div>
                            <!--  <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div>-->
                           <a class="section-scroll btn btn-border-w btn-round" href="{{ url('advt/create ') }}">создать обьявление</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/2.jpg&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-4" style="color:#007bff " >размещаем бесплатно</div>
                            <div class="font-alt mb-40 titan-title-size-4">продаем быстро</div>
                         <a class="section-scroll btn btn-border-w btn-round" href="{{ url('advt/create ') }}">создать обьявление</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <br>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">все категории</h2>
                </div>
            </div>
            <div class="row multi-columns-row">

                @foreach ($data as $item)
                    <!--  LOOP  -->
                          @php
                           $img =  json_decode($item->img);
                          @endphp

                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="storage/{{$img[0]}}" alt=""/>
                                <div class="shop-item-detail"><a  href="{{ url('/advt/'.$item->id) }}" class="btn btn-round btn-b"><span class="">подробнее</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">{{$item->title}}</a></h4>{{$item->price}} Р.
                        </div>
                    </div>

                    <!-- end -->
                @endforeach


            </div>
            {{ $data->links() }}
            <br><br>
        </div>


        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">about service box</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">admin@servicebox.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Blog Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Photography - 7</a></li>
                                <li><a href="#">Web Design - 3</a></li>
                                <li><a href="#">Illustration - 12</a></li>
                                <li><a href="#">Marketing - 1</a></li>
                                <li><a href="#">Wordpress - 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                        <div class="widget-posts-meta">23 january</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2022&nbsp;<a href="index.html">Service box</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                   <!--     <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>

@endsection
