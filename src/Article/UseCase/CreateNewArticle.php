<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 17:19
 */

namespace danielburnley\Wiki\Article\UseCase;

use danielburnley\Wiki\Article\CreateNewArticle\Request;
use danielburnley\Wiki\Article\CreateNewArticle\Response;

interface CreateNewArticle
{

    /**
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request) : Response;

}