<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 26/08/16
 * Time: 21:51
 */

namespace danielburnley\Wiki\Api\Article;


use Clearbooks\Dilex\Endpoint;
use danielburnley\Wiki\Core\Article\UseCase\CreateNewArticle as CreateNewArticleUseCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateNewArticle implements Endpoint
{

    const TITLE = "title";

    const BODY = "body";

    /** @var CreateNewArticleUseCase */
    private $useCase;

    /**
     * CreateNewArticle constructor.
     * @param CreateNewArticleUseCase $useCase
     */
    public function __construct(CreateNewArticleUseCase $useCase)
    {
        $this->useCase = $useCase;
    }


    public function execute(Request $request)
    {
        return new Response("", 400);
    }
}