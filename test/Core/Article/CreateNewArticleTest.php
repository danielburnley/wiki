<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 20:32
 */

namespace danielburnley\Wiki\Core\Article;

use danielburnley\Wiki\Core\Article\CreateNewArticle\Request;
use danielburnley\Wiki\Core\Article\CreateNewArticle;
use danielburnley\Wiki\Core\Article\CreateNewArticle\Response;

class CreateNewArticleTest extends \PHPUnit_Framework_TestCase
{
    const TITLE = "title";
    const BODY = "body";

    /** @var CreateNewArticle */
    private $createNewArticle;
    /** @var CreateNewArticleGatewaySpy */
    private $gateway;

    /**
     * @param CreateNewArticle\Response $response
     * @param $expectedError
     */
    private function assertErrorReturned(CreateNewArticle\Response $response, $expectedError)
    {
        $this->assertEquals($expectedError, $response->getErrors()[0]);
    }

    /**
     * @param $response
     * @param $expectedError
     */
    private function assertUnsuccessfulResponse(CreateNewArticle\Response $response, $expectedError)
    {
        $this->assertNotEmpty($response->getErrors());
        $this->assertFalse($response->isSuccessful());
        $this->assertErrorReturned($response, $expectedError);
    }


    /**
     * @param $response
     */
    public function assertArticleCreatedSuccessfully(Response $response)
    {
        $this->assertTrue($response->isSuccessful());
        $this->assertEquals(CreateNewArticleGatewaySpy::ID_CREATED, $response->getIdCreated());
    }

    /**
     * @param $title
     * @param $body
     * @return Request
     */
    private function createNewRequest($title, $body)
    {
        $request = new Request();
        $request->setArticle(new Article($title, $body));
        return $request;
    }

    protected function setUp()
    {
        parent::setUp();

        $this->gateway = new CreateNewArticleGatewaySpy();
        $this->createNewArticle = new CreateNewArticle($this->gateway);
    }

    /**
     * @test
     */
    public function GivenAnArticleWithNoTitle_WhenAttemptingToCreateANewArticle_ThenResponseObjectReturnsTitleNotSetError()
    {
        $request = $this->createNewRequest(null, self::BODY);

        $response = $this->createNewArticle->execute($request);
        $this->assertUnsuccessfulResponse($response, CreateNewArticle::ERROR_NO_TITLE);
    }

    /**
     * @test
     */
    public function GivenArticleWithNoBody_WhenAttemptingToCreateANewArticle_ThenResponseObjectReturnsBodyNotSetError()
    {
        $request = $this->createNewRequest(self::TITLE, null);

        $response = $this->createNewArticle->execute($request);
        $this->assertUnsuccessfulResponse($response, CreateNewArticle::ERROR_NO_BODY);
    }

    /**
     * @test
     */
    public function GivenArticleWithTitleAndBody_WhenAttemptingToCreateArticle_ThenSuccessfullyCreateArticleAndReturnID()
    {
        $request = $this->createNewRequest(self::TITLE, self::BODY);

        $response = $this->createNewArticle->execute($request);
        $this->assertArticleCreatedSuccessfully($response);
    }

}
