<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 13/03/16
 * Time: 18:06
 */

namespace danielburnley\Wiki\Core\Article;


use danielburnley\Wiki\Core\Article\Entity\Article;
use danielburnley\Wiki\Core\Article\Gateway\CreateNewArticleGateway;

class CreateNewArticleGatewaySpy implements CreateNewArticleGateway
{
    const ID_CREATED = 9001;


    /** @var Article */
    public $articleCreated;

    public function createNewArticle(Article $article)
    {
        $this->articleCreated = $article;
        return self::ID_CREATED;
    }
}