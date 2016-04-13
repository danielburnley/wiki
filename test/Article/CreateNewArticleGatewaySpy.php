<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 13/03/16
 * Time: 18:06
 */

namespace Pintsize\Wiki\Article;


use Pintsize\Wiki\Article\Entity\Article;
use Pintsize\Wiki\Article\Gateway\CreateNewArticleGateway;

class CreateNewArticleGatewaySpy implements CreateNewArticleGateway
{

    /** @var Article */
    public $articleCreated;

    public function createNewArticle(Article $article)
    {
        $this->articleCreated = $article;
    }
}