@extends('layout.layout') 
@section('content')
<?php
 echo("<pre>");
    print_r($product->name);
    echo("</pre>");
     ?>
<div class=" single_top">
    <div class="single_grid">
        <div class="grid images_3_of_2">
            <ul id="etalage">
                <li>
                    <a href="optionallink.html">
                              <img class="etalage_thumb_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                              <img class="etalage_source_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" title="" />
                          </a>
                </li>
                <li>
                    <img class="etalage_thumb_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                    <img class="etalage_source_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" title="" />
                </li>
                <li>
                    <img class="etalage_thumb_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                    <img class="etalage_source_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                </li>
                <li>
                    <img class="etalage_thumb_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                    <img class="etalage_source_image" src="{{URL::asset('asset/images/')  .'/'. $product->image }}" class="img-responsive" />
                </li>
            </ul>
            <div class="clearfix"> </div>
        </div>
        <div class="desc1 span_3_of_2">


            <h4><?php echo $product->name?></h4>
            <div class="cart-b">
                <div class="left-n "><?= number_format($product->last_price); ?> đ</div>                
                <a class="now-get get-cart-in" href="#">BUY NOW</a>
                <div class="clearfix"></div>
            </div>
            <div class="cart-b">
                    <div class="left-n ">Start: <?php echo number_format($product->first_price);?> đ</div>
                    <div class="clearfix"></div>         
            </div>
            <div class="cart-b">
                    <div class="left-n ">Step: <?php echo number_format($product->step_price);?> đ</div>
                    <div class="clearfix"></div>         
            </div>
            <div class="cart-b">
                    <div class="left-n ">Now: 2,000,000 đ</div>
                    <div class="left-n">nguyendhuy@gmail.com</div>
                    <div class="clearfix"></div>         
            </div>
            <div class="cart-b">
                    <div class="left-n "><input type='number' name="" id="" required></div>
                    <a class="now-get get-cart-in" href="#">BID</a>
                    <div class="clearfix"></div>         
            </div>
            <p><?php echo $product->description ?></p>
            <div class="share">
                <h5>Share Product :</h5>
                <ul class="share_nav">
                    <li><a href="#"><img src="{{URL::asset('asset/images/facebook.png')}}" title="facebook"></a></li>
                    <li><a href="#"><img src="{{URL::asset('asset/images/twitter.png')}}" title="Twiiter"></a></li>
                    <li><a href="#"><img src="{{URL::asset('asset/images/rss.png')}}" title="Rss"></a></li>
                    <li><a href="#"><img src="{{URL::asset('asset/images/gpluse.png')}}" title="Google+"></a></li>
                </ul>
            </div>


        </div>
        <div class="clearfix"> </div>
    </div>
    <ul id="flexiselDemo1">
        <li><img src="{{URL::asset('asset/images/pi.jpg')}}" />
            <div class="grid-flex"><a href="#">Bloch</a>
                <p>Rs 850</p>
            </div>
        </li>
        <li><img src="{{URL::asset('asset/images/pi1.jpg')}}" />
            <div class="grid-flex"><a href="#">Capzio</a>
                <p>Rs 850</p>
            </div>
        </li>
        <li><img src="{{URL::asset('asset/images/pi2.jpg')}}" />
            <div class="grid-flex"><a href="#">Zumba</a>
                <p>Rs 850</p>
            </div>
        </li>
        <li><img src="{{URL::asset('asset/images/pi3.jpg')}}" />
            <div class="grid-flex"><a href="#">Bloch</a>
                <p>Rs 850</p>
            </div>
        </li>
        <li><img src="{{URL::asset('asset/images/pi4.jpg')}}" />
            <div class="grid-flex"><a href="#">Capzio</a>
                <p>Rs 850</p>
            </div>
        </li>
    </ul>
    <div>
        <button type="button" id="test-button">Click Me!</button>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
      $("#flexiselDemo1").flexisel({
          visibleItems: 5,
          animationSpeed: 1000,
          autoPlay: true,
          autoPlaySpeed: 3000,    		
          pauseOnHover: true,
          enableResponsiveBreakpoints: true,
          responsiveBreakpoints: { 
              portrait: { 
                  changePoint:480,
                  visibleItems: 1
              }, 
              landscape: { 
                  changePoint:640,
                  visibleItems: 2
              },
              tablet: { 
                  changePoint:768,
                  visibleItems: 3
              }
          }
      });
      
  });

    </script>
    <script type="text/javascript" src="{{URL::asset('asset/js/jquery.flexisel.js')}}"></script>

    <div class="toogle">
        <h3 class="m_3">Product Details</h3>
        <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
            nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
            molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
            qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum
            soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
    </div>
</div>
@endsection