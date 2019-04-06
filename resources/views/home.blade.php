@extends('layout.layout')
@section('content')
<div class="shoes-grid">
        <a href="single.html">
            <div class="wrap-in">
                <div class="wmuSlider example1 slide-grid">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-matter">
                                <div class="col-md-5 banner-bag">
                                    <img class="img-responsive " src="{{URL::asset('asset/images/bag.jpg')}}" alt=" " />
                                </div>
                                <div class="col-md-7 banner-off">
                                    <h2>FLAT 50% 0FF</h2>
                                    <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et </p>
                                    <span class="on-get">GET NOW</span>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-matter">
                                <div class="col-md-5 banner-bag">
                                    <img class="img-responsive " src="{{URL::asset('asset/images/bag1.jpg')}}" alt=" " />
                                </div>
                                <div class="col-md-7 banner-off">
                                    <h2>FLAT 50% 0FF</h2>
                                    <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et </p>
                                    <span class="on-get">GET NOW</span>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-matter">
                                <div class="col-md-5 banner-bag">
                                    <img class="img-responsive " src="{{URL::asset('asset/images/bag.jpg')}}" alt=" " />
                                </div>
                                <div class="col-md-7 banner-off">
                                    <h2>FLAT 50% 0FF</h2>
                                    <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        ut labore et </p>
                                    <span class="on-get">GET NOW</span>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                        </article>

                    </div>
        </a>
        <ul class="wmuSliderPagination">
            <li><a href="#" class="">0</a></li>
            <li><a href="#" class="">1</a></li>
            <li><a href="#" class="">2</a></li>
        </ul>
        <script src="{{URL::asset('asset/js/jquery.wmuSlider.js')}}"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
        </div>
        </div>
        </a>
        <!---->

        <div class="products">
            <h5 class="latest-product">LATEST PRODUCTS</h5>
            <a class="view-all" href="product.html">VIEW ALL<span> </span></a>
        </div>

        <div class="grid-container">
            @foreach ($product as $key=>$p )
            <div class="chain-grid">
                    <a href="<?=route('single',$p->id_product)?>"><img class="img-responsive chain" src="{{URL::asset('asset/images/')  .'/'. $p->image }}" width="100px" alt=" " /></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.html"><?= $p->name ?></a></h6>
                        <div class="star-price">
                            <div class="dolor-grid">
                                <p class="actual">Buy now: <span><?=number_format($p->last_price)?></span> VNĐ</p>
                                <p class="actual">Recent price: <span><?=number_format($p->first_price)?></span> VNĐ</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div data-countdown="<?= $p->day_end ?>"></div>
                </div>
            @endforeach
        </div>
        @endsection