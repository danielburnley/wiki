<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 13/03/16
 * Time: 18:15
 */

namespace danielburnley\Wiki\Core\Article\CreateNewArticle;


use danielburnley\Wiki\Core\Article\Entity\Article;

class Request
{

    /** @var Article */
    private $article;

    /**
     * @return Article
     */
    public function getArticle() : Article
    {
        return $this->article;
    }

    /**
     * @param Article $article
     */
    public function setArticle(Article $article)
    {
        $this->article = $article;
    }
}