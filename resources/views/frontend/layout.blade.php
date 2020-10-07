<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="/frontend/css/vitaminc.css" type="text/css"/>
    <title>Home | Vitamin C</title>    
    <script src="/frontend/js/modernizr.js" type="text/javascript"></script>
</head>
<body>
<div class="menuIcon pc">
    <div class="listIcons">
        <ul>
            <li>
                <a href="#" class="iSearch">Search</a>
                <div class="box-find" id="box-find">
                    <form>
                        <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword" class="txt"/>
                        <input type="submit" value="" name="submit" class="btn-find"/>
                    </form>
                </div>
            </li>
            <li><a href="#" class="iYou">Youtube</a></li>
            <li><a href="#" class="iSkype">Skype</a></li>
            <li><a href="#" class="iGoogle">Google</a></li>
        </ul>
    </div>
</div>
<div class="hotLine sp">
    <img src="/frontend/imgs/hot.png" alt="Hot">
</div>
<header class="header">
    <div class="container">
        <h1 class="clearFix">
            <a href="#" class="logo" title="Logo">
                <img src="/frontend/imgs/logo.png" alt="Vitamin C" width="225" height="125" class="pc">
                <img src="/frontend/imgs/logosp.png" alt="Vitamin C" width="295" height="100" class="sp">
            </a>
        </h1>
        <ul id="globalNav" class="pc">
            <li>
                <a class="{{(isset($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">TRANG CHỦ</a>
            </li>

            @if ($headerCategories = \App\Helpers::getMainCategories())
                @foreach ($headerCategories as $headerCategory)
                    <li>
                        <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->children->pluck('slug')->all()))) ? 'active' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                        @if ($headerCategory->children->count() > 0)
                            <ul>
                                @foreach ($headerCategory->children as $childCategory)
                                    <li><a class="{{(isset($page) && $page == $childCategory->slug) ? 'active' : ''}}" href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif

            <li><a href="{{ route('frontend.video') }}">Videos</a></li>
            <li><a href="{{ route('frontend.contact') }}">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
<!-- /endHeader -->
@if ($focusPosts = \App\Helpers::getFocusIndexPosts())
    <section class="boxSlidePage bg">
        <div class="container">
            <h3 class="globalTitle noneAfter">
                <a href="#">
                    <span class="highLight">&nbsp;</span>
                    <span class="bgLight">Tiêu điểm</span>
                </a>
            </h3>
            <div class="listSlidePage clearFix">
                <div class="owl-carousel" id="slidePage">
                    @foreach ($focusPosts as $focusPost)
                        <div class="item wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="1s">
                            <a href="{{ url($focusPost->slug.'.html') }}" title="">
                                <img src="{{ \App\Helpers::getImageUrlBySize($focusPost->image, 274, 174) }}" width="274" height="174" alt=""/>
                            </a>
                            <h3>
                                <a href="{{ url($focusPost->slug.'.html') }}">
                                    {{ $focusPost->name }}
                                </a>
                            </h3>
                            <p>
                                {{ $focusPost->desc }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

@yield('content')

<!-- /endSection -->
<footer class="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="#" class="se">Search</a></li>
                    <li><a href="#" class="yu">Youtube</a></li>
                    <li><a href="#" class="sk">Skype</a></li>
                    <li><a href="#" class="go">googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li>
                        <a class="{{(isset($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">TRANG CHỦ</a>
                    </li>

                    @if ($headerCategories = \App\Helpers::getMainCategories())
                        @foreach ($headerCategories as $headerCategory)
                            <li>
                                <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->children->pluck('slug')->all()))) ? 'active' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                            </li>
                        @endforeach
                    @endif

                    <li><a href="{{ route('frontend.video') }}">Videos</a></li>
                    <li><a href="{{ route('frontend.contact') }}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p class="copy">MỌI THÔNG TIN ĐỀU BẢN QUYỀN ĐỀU THUỘC VỀ CÔNG TY TNHH TUỆ LINH</p>
            <p class="address">
                Tầng 5, Tòa nhà 29 T1 - Hoàng Đạo Thúy - Trung Hòa - Cầu Giấy - Hà Nội- Điện thoại: (04) 62824344 - Fax: 04.62824263
            </p>
        </div>
    </div>
</footer>
<!-- /endboxNews -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript" src="/frontend/js/jquery-1.10.2.min.js"></script>
<script src="/frontend/js/wow.min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/frontend/js/scrollReveal.js"></script>
<script type="text/javascript" src="/frontend/js/common.js"></script>
@yield('after_scripts')
</body>
</html>