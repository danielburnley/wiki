<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 17:19
 */

namespace Pintsize\Wiki\Article\UseCase;

use Pintsize\Wiki\Article\CreateNewArticle\Request;
use Pintsize\Wiki\Article\CreateNewArticle\Response;

interface CreateNewArticle
{

    /**
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request) : Response;

}