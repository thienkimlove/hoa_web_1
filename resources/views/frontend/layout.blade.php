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
            <li><a href="index.html" class="active">Trang chủ</a></li>
            <li><a href="ctunhien.html">VITAMIN C<br>TỰ NHIÊN</a></li>
            <li>
                <a href="vitamin.html">Vitamin C</a>
                <ul>
                    <li><a href="cNattu.html">C NATTU</a></li>
                    <li><a href="ckids.html">C NATTU KIDS</a></li>
                </ul>
            </li>
            <li><a href="tintuc.html">Tin tức</a></li>
            <li>
                <a href="methongthai.html">GÓC MẸ <br>THÔNG THÁI</a>
                <ul>
                    <li><a href="">Bệnh trẻ thường gặp</a></li>
                    <li><a href="">Dược liệu</a></li>
                    <li><a href="">Nghiên cứu lâm sàng</a></li>
                </ul>
            </li>
            <li><a href="videos.html">Videos</a></li>
            <li><a href="cauhoi.html">CÂU HỎI <br>THƯỜNG GẶP</a></li>
            <li><a href="lienhe.html">Liên hệ</a></li>
        </ul>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
</header>
<!-- /endHeader -->

<section class="section mb0">
    <div class="container">
        @yield('content')
    </div>
</section>
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
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">VITAMIN C TỰ NHIÊN</a></li>
                    <li><a href="#">Vitamin C</a></li>
                    <li><a href="#">TIN TỨC</a></li>
                    <li><a href="#">GÓC MẸ THÔNG THÁI</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">CÂU HỎI THƯỜNG GẶP</a></li>
                    <li><a href="#">LIÊN HỆ</a></li>
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