<?php
/**
 * Created by PhpStorm.
 * User: tieungao
 * Date: 2020-10-06
 * Time: 17:23
 */

namespace App;


use App\Models\Category;
use App\Models\Post;
use App\Models\Video;

class Helpers
{
    public const SETTINGS = [
        [
            'key'         => 'meta_index_title',
            'name'        => 'Meta Index Title',
            'description' => 'For SEO',
            'value'       => 'suckhoe248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_index_desc',
            'name'        => 'Meta Index Description',
            'description' => 'For SEO',
            'value'       => 'suckhoe248.com',
            'field'       => '{"name":"value","label":"Value","type":"textarea"}', //text, textarea
            'active'      => 1,
        ],
        [
            'key'         => 'meta_index_keywords',
            'name'        => 'Meta Index Keywords',
            'description' => 'For SEO',
            'value'       => 'suckhoe248.com',
            'field'       => '{"name":"value","label":"Value","type":"text"}', //text, textarea
            'active'      => 1,
        ],

    ];

    public static function getMainCategories()
    {
        return Category::whereNull('parent_id')->get();
    }

    public static function getContactStatuses()
    {
        return [
            0 => 'Mới tạo',
            1 => 'Đang xử lý',
            2 => 'Kết thúc'
        ];
    }

    public static function getYouTubeId($url)
    {
        // Extract id
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $videoId);
        return $youtubeVideoId = isset($videoId[1]) ? $videoId[1] : "";
    }

    public static function getYoutubeImage($url)
    {
        $youtubeVideoId = self::getYouTubeId($url);

        return 'https://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
    }

    public static function getEmberCodeYoutube($url)
    {
        $youtubeVideoId = self::getYouTubeId($url, $width = 560, $height = 315);


        return '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$youtubeVideoId.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }

    public static function getRightVideos()
    {
        return Video::where('status', true)
            ->latest('created_at')
            ->limit(4)
            ->get();
    }

    public static function getLatestPosts()
    {
        return Post::where('status', true)
            ->latest('created_at')
            ->limit(6)
            ->get();
    }

    public static function getFocusIndexPosts()
    {
        return Post::where('status', true)
            ->where('is_focus_index', true)
            ->latest('created_at')
            ->limit(6)
            ->get();
    }

    public static function getHighLightIndexPosts()
    {
        return Post::where('status', true)
            ->where('is_highlight_index', true)
            ->latest('created_at')
            ->limit(4)
            ->get();
    }

}