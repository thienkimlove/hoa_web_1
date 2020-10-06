<?php
/**
 * Created by PhpStorm.
 * User: tieungao
 * Date: 2020-10-06
 * Time: 17:23
 */

namespace App;


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

}