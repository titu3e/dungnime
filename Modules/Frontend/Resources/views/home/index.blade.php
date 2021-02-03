@extends('frontend::layouts.app')

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                @if(!empty($banner))
                @foreach($banner as $r_banner)
                <div class="hero__items set-bg" data-setbg="{{$r_banner->url_banner}}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <!-- <div class="label">Adventure</div> -->
                                <h2>{{$r_banner->title}}</h2>
                                <p>{{Str::limit($r_banner->description, 150)}}</p>
                                <a href="{{route('frontend.detail',$r_banner->slug)}}"><span>Selengkapnya ...</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>On Going Anime</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{route('frontend.ongoing')}}" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if(!empty($ongoing))
                                @foreach($ongoing as $r_ongoing)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$r_ongoing->url_thumbnail}}">
                                        <div class="ep">{{$r_ongoing->rating}}</div>
                                        <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                        <div class="view"></i>{{$r_ongoing->status}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                             @if(!empty($r_ongoing->genre))
                                                @foreach($r_ongoing->genre as $genre)
                                            <li>{{$genre}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <h5><a href="{{route('frontend.detail',$r_ongoing->slug)}}">{{$r_ongoing->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                             @endif
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             @if(!empty($popular))
                                @foreach($popular as $r_popular)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$r_popular->url_thumbnail}}">
                                        <div class="ep">{{$r_popular->rating}}</div>
                                        <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                        <div class="view"></i>{{$r_popular->status}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            @if(!empty($r_popular->genre))
                                                @foreach($r_popular->genre as $genre)
                                            <li>{{$genre}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <h5><a href="{{route('frontend.detail',$r_popular->slug)}}">{{$r_popular->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                             @endif
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if(!empty($recent))
                            @foreach($recent as $r_recent)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$r_recent->anime->url_thumbnail}}">
                                        <div class="ep">{{$r_recent->anime->rating}}</div>
                                        <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                        <div class="view"></i>{{$r_recent->anime->status}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                             @if(!empty($r_recent->anime->genre))
                                                @foreach($r_recent->anime->genre as $genre)
                                            <li>{{$genre}}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <h5><a href="{{route('frontend.detail',$r_recent->slug)}}">{{$r_recent->anime->title}} {{$r_recent->title}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Recommended Anime</h5>
                            </div>
                            <div class="filter__gallery">
                                @if(!empty($recommended))
                                @foreach($recommended as $r_recommended)
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="{{$r_recommended->url_thumbnail}}">
                                        <div class="ep">{{$r_recommended->rating}}</div>
                                        <!-- <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                        <h5><a href="{{route('frontend.detail',$r_recommended->slug)}}">{{$r_recommended->title}}</a></h5>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->



  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->
</body>
@endsection

