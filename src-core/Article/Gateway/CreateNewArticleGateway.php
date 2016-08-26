<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 20:14
 */

namespace danielburnley\Wiki\Core\Article\Gateway;


use danielburnley\Wiki\Core\Article\Entity\Article;

interface CreateNewArticleGateway
{

    public function createNewArticle(Article $article);

}