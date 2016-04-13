<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 20:31
 */

namespace Pintsize\Wiki\Article;


use Pintsize\Wiki\Article\CreateNewArticle\Request;
use Pintsize\Wiki\Article\CreateNewArticle\Response;
use Pintsize\Wiki\Article\Gateway\CreateNewArticleGateway;

class CreateNewArticle implements UseCase\CreateNewArticle
{

    const ERROR_NO_TITLE = "Title is not allowed to be empty!";
    const ERROR_NO_BODY = "Body is not allowed to be empty!";

    /** @var CreateNewArticleGateway */
    private $gateway;

    /**
     * CreateNewArticle constructor.
     * @param CreateNewArticleGateway $gateway
     */
    public function __construct(CreateNewArticleGateway $gateway)
    {
        $this->gateway = $gateway;
    }


    /**
     * @param Request $request
     * @return Response
     */
    public function execute(Request $request) : Response
    {
        $response = new Response();

        $this->validateRequest($request, $response);

        return $response;
    }

    /**
     * @param Request $request
     * @param Response $response
     */
    private function validateTitle(Request $request, Response $response)
    {
        try {
            $request->getArticle()->getTitle();
        } catch (\Throwable $e) {
            $response->setError(self::ERROR_NO_TITLE);
        }
    }

    /**
     * @param Request $request
     * @param $response
     */
    private function validateBody(Request $request, Response $response)
    {
        try {
            $request->getArticle()->getBody();
        } catch (\Throwable $e) {
            $response->setError(self::ERROR_NO_BODY);
        }
    }

    /**
     * @param Request $request
     * @param $response
     */
    private function validateRequest(Request $request, $response)
    {
        $this->validateTitle($request, $response);
        $this->validateBody($request, $response);
    }
}