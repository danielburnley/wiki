<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 19:55
 */

namespace danielburnley\Wiki\Core\Article;

class Article implements Entity\Article
{

    private $title;

    private $body;

    /**
     * Article constructor.
     * @param $title
     * @param $body
     */
    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getBody() : string
    {
        return $this->body;
    }
}