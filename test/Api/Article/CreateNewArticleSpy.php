<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 26/08/16
 * Time: 23:26
 */

namespace danielburnley\Wiki\Api\Article;


use danielburnley\Wiki\Core\Article\CreateNewArticle\Request;
use danielburnley\Wiki\Core\Article\CreateNewArticle\Response;
use danielburnley\Wiki\Core\Article\UseCase\CreateNewArticle;

class CreateNewArticleSpy implements CreateNewArticle
{

    /** @var bool */
    public $isExecuted = false;

    /**
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request) : Response
    {
        $this->isExecuted = true;
        return new Response();
    }
}