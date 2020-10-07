@extends('frontend.layout')

@section('content')
    <div class="contentLeft">
        <!-- /endboxRecommended -->
        <div class="boxNews clearFix">
            <h3 class="globalTitle">
                <a href="#">Bài viết mới nhất</a>
            </h3>
            @if ($latestPosts = \App\Helpers::getLatestPosts())
                @foreach ($latestPosts->chunk(3) as $latest3Posts)
                    <div class="listNews clearFix">
                        @foreach ($latest3Posts as $latest3Post)
                            <div class="item">
                                <a href="#" class="thumb">
                                    <img src="{{ \App\Helpers::getImageUrlBySize($latest3Post->image, 130, 80)  }}" alt="{{ $latest3Post->name }}">

                                </a>
                                <p>
                                    {{ $latest3Post->name }}
                                </p>
                                <span class="datePost">{{ $latest3Post->updated_at->format('d/m/Y') }}</span>
                                <span class="countView">{{ $latest3Post->views }} lượt xem</span>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endif
        </div>
        <!-- /endboxNews -->
        <div class="boxConsult">
            <div class="titleConsult">
                <h3 class="globalTitle">
                    <a href="#">Bài viết nổi bật</a>
                </h3>
            </div>
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
            </div>
        </div>
    </div>
    @include('frontend.right')
@endsection

@section('after_scripts')


@endsection