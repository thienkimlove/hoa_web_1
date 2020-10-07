@extends('frontend.layout')

@section('content')
    <div class="contentLeft">
        <!-- /endboxRecommended -->
        <div class="boxNews clearFix">
            <h3 class="globalTitle">
                <a href="#">Tin mới nhất</a>
            </h3>
            <div class="listNews clearFix">
                <div class="item">
                    <a href="#" class="thumb">
                        <img src="/frontend/imgs/temp/thumb130x80.jpg" alt="List news">
                    </a>
                    <p>
                        Tôi được Dược sỹ tư vấn dùng Imunoglukan P4H® cho cháu 20 tháng tuổi để phòng ngừa cảm cúm.
                    </p>
                    <span class="datePost">11/01/2016</span>
                    <span class="countView">203 lượt xem</span>
                </div>
                <div class="item">
                    <a href="#" class="thumb">
                        <img src="/frontend/imgs/temp/thumb130x80.jpg" alt="List news">
                    </a>
                    <p>
                        Tôi được Dược sỹ tư vấn dùng Imunoglukan P4H® cho cháu 20 tháng
                    </p>
                    <span class="datePost">11/01/2016</span>
                    <span class="countView">203 lượt xem</span>
                </div>
                <div class="item">
                    <a href="#" class="thumb">
                        <img src="/frontend/imgs/temp/thumb130x80.jpg" alt="List news">
                    </a>
                    <p>
                        Tôi được Dược sỹ tư vấn dùng Imunoglukan P4H® cho cháu 20
                    </p>
                    <span class="datePost">11/01/2016</span>
                    <span class="countView">203 lượt xem</span>
                </div>
            </div>
        </div>
        <!-- /endboxNews -->
        <div class="boxConsult">
            <div class="titleConsult">
                <h3 class="globalTitle">
                    <a href="#">Góc chuyên gia</a>
                </h3>
            </div>
            <p>
                Với đội ngũ bác sĩ, dược sĩ nhiều năm kinh nghiệm và các chuyên gia hàng đầu của hãng dược phẩm Pleuran, chúng tôi luôn lắng nghe và sẵn sàng tư vấn với mong muốn mang tới sức khỏe toàn diện cho thế hệ mầm non Việt Nam.
            </p>
        </div>
        <div class="boxQuestion clearFix">
            <div class="areaQuestion">
                <ul class="listQuestion" id="listQuestion">
                    <li><a href="#">Viêm phế quản ở trẻ 2 tuổi</a></li>
                    <li><a href="#">Dấu hiệu và cách chữa viêm họng cho trẻ sơ sinh</a></li>
                    <li><a href="#">Lưu ý cần biết khi đưa bé đi tiêm chủng</a></li>
                    <li><a href="#">Cách nào giúp trẻ ăn ngon?</a></li>
                    <li><a href="#">Dấu hiệu và cách chữa viêm họng cho trẻ sơ sinh</a></li>
                    <li><a href="#">Ép con ăn hết – mẹ mừng hay lo?</a></li>
                    <li><a href="#">Viêm phế quản ở trẻ 2 tuổi</a></li>
                </ul>
                <div class="areaAsk">
                    <a href="#" class="btnAsk">Đặt câu hỏi tại đây</a>
                </div>
            </div>
            <div class="areaAvatar">
                <img src="/frontend/imgs/bg/avatar.png" alt="">
            </div>
        </div>
    </div>
    <div class="contentRight">
        <div class="boxVideo">
            <h3 class="globalTitle">
                <a href="#">Góc Video</a>
            </h3>
            <div class="content">
                <iframe width="100%" height="250" src="https://www.youtube.com/embed/4QEmJ3sPHIg" frameborder="0" allowfullscreen></iframe>
                <ul class="listVideo">
                    <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                    <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                    <li><a href="#">Giải đáp các thắc mắc của Mẹ trong quá  trình mang thai và chăm </a></li>
                </ul>
            </div>
        </div>
        <!-- /endVideo -->
        <div class="boxSale">
            <h3 class="globalTitle">
                <a href="#">Cộng đồng mẹ thông thái</a>
            </h3>
            <div class="Social">
                <div class="fb-page" data-href="https://www.facebook.com/tuelinh.vn" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tuelinh.vn"><a href="https://www.facebook.com/tuelinh.vn">Tuệ Linh</a></blockquote></div></div>
            </div>
        </div>
        <!-- /endSale -->
    </div>
@endsection

@section('after_scripts')


@endsection