<div class="contentRight">
    @if ($rightVideos = \App\Helpers::getRightVideos())
        <div class="boxVideo">
            <h3 class="globalTitle">
                <a href="#">Góc Video</a>
            </h3>
            @if ($firstVideos = $rightVideos->shift())
                <div class="content">
                    {!! \App\Helpers::getEmberCodeYoutube($firstVideos->link, '100%', 250) !!}

                    @if ($rightVideos->count() > 0)
                    <ul class="listVideo">
                        @foreach ($rightVideos as $rightVideo)
                            <li>
                                <a href="{{ url('video/'.$rightVideo->slug) }}">
                                    {{ $rightVideo->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            @endif
        </div>
    @endif
</div>