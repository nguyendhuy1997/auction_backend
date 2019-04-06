<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>


<head>
    <title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <link href="{{URL::asset('asset/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="{{URL::asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{URL::asset('asset/css/etalage.css')}}" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{URL::asset('asset/js/jquery.min.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="{{URL::asset('asset/js/jquery.etalage.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($){
    
                    $('#etalage').etalage({
                        thumb_image_width: 300,
                        thumb_image_height: 400,
                        source_image_width: 900,
                        source_image_height: 1200,
                        show_hint: true,
                        click_callback: function(image_anchor, instance_id){
                            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                        }
                    });
    
                });
    </script>

    <!--//Clock count time -->
    <script src="{{URL::asset('asset/js/jquery.countdown.js')}}"></script>
    <script src="{{URL::asset('asset/js/jquery.countdown.min.js')}}"></script>
    <!--//Clock count time -->
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <ul class="support">
                        <li><a href="#"><label> </label></a></li>
                        <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                    </ul>
                    <ul class="support">
                        <li class="van"><a href="#"><label> </label></a></li>
                        <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="top-header-right">
                    <div class="down-top">
                        <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
                    </div>
                    <div class="down-top top-down">
                        <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
                    </div>
                    <!---->
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="header-bottom-left">
                    <div class="logo">
                        <a href="index.html"><img src="{{URL::asset('asset/images/logo.png')}}" alt=" " /></a>
                    </div>
                    <div class="search">
                        <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" value="SEARCH">

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="header-bottom-right">
                    <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
                    <ul class="login">
                        <?php if(Auth::check()){ ?>
                            <li><a href=""><span> </span>Hello <?= Auth::user()->name; ?> </a></li> |
                            <li><a href="{{route('logout')}}">LOGOUT</a></li>
                        <?php } else {?>
                        <li><a href="{{route('login')}}"><span> </span>LOGIN</a></li> |
                        <li><a href="{{route('register')}}">SIGNUP</a></li>
                        <?php }?>
                    </ul>
                    <div class="cart"><a href="#"><span> </span>CART</a></div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">CATEGORIES</h3>
            <ul class="menu">
                <ul class="kid-menu ">
                    @foreach ($category as $p )
                    <li><a href="#"><?= $p->name?></a></li>
                    @endforeach {{--
                    <li><a href="product.html">Commodo sit</a></li>
                    <li><a href="product.html">Urna ac tortor sc</a></li>
                    <li><a href="product.html">Ornared id aliquet</a></li>
                    <li><a href="product.html">Urna ac tortor sc</a></li>
                    <li><a href="product.html">Eget nisi laoreet</a></li>
                    <li><a href="product.html">Faciisis ornare</a></li>
                    <li class="menu-kid-left"><a href="contact.html">Contact us</a></li> --}}
                </ul>
            </ul>
        </div>
        <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
        </script>
        <div class=" chain-grid menu-chain">
            <a href="single.html"><img class="img-responsive chain" src="{{URL::asset('asset/images/wat.jpg')}}" alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>
                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            </div>
        </div>
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
    </div>
    <div class="container">

        @yield('content')
    </div>
    <div class="clearfix"> </div>
    </div>

    <!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6>NEWS-LETTER</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}"
                            />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>FOLLOW US</p>
                    <ul class="face-in-to">
                        <li><a href="#"><span> </span></a></li>
                        <li><a href="#"><span class="facebook-in"> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-cate">
                    <h6>CATEGORIES</h6>
                    <ul>

                    </ul>
                </div>
                <div class="footer-bottom-cate bottom-grid-cat">
                    <h6>FEATURE PROJECTS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate">
                    <h6>TOP BRANDS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Eget nisi laoreet</a></li>
                        <li><a href="#">Faciisis ornare</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate cate-bottom">
                    <h6>OUR ADDERSS</h6>
                    <ul>
                        <li>Aliquam metus dui. </li>
                        <li>orci, ornareidquet</li>
                        <li> ut,DUI.</li>
                        <li>nisi, dignissim</li>
                        <li>gravida at.</li>
                        <li class="phone">PH : 6985792466</li>
                        <li class="temp">
                            <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>
<script src="{{URL::asset('js/all.js')}}"></script>
<script src="{{URL::asset('asset/js/service/clock.js')}}"></script>

</html>