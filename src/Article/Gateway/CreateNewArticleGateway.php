<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 20:14
 */

namespace Pintsize\Wiki\Article\Gateway;


use Pintsize\Wiki\Article\Entity\Article;

interface CreateNewArticleGateway
{

    public function createNewArticle(Article $article);

}