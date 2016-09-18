<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 26/08/16
 * Time: 21:52
 */

namespace danielburnley\Wiki\Api\Article;


use danielburnley\Wiki\Api\EndpointTest;

class CreateNewArticleTest extends EndpointTest
{
    const BODY_DATA = "Meow meow";
    const TITLE_DATA = "Meow";

    /** @var CreateNewArticleSpy */
    private $useCaseSpy;

    public function assertUseCaseNotExecuted()
    {
        $this->assertFalse($this->useCaseSpy->isExecuted);
    }

    protected function setUp()
    {
        $this->useCaseSpy = new CreateNewArticleSpy();
        $this->endpoint = new CreateNewArticle($this->useCaseSpy);
    }

    /**
     * @test
     */
    public function GivenNoTitle_WhenTryingToCreateArticle_ThenReturn400AndDoNotExecuteUseCase()
    {
        $query = [
            CreateNewArticle::TITLE => null,
            CreateNewArticle::BODY => self::BODY_DATA
        ];

        $this->executeWithQuery($query);
        $this->assert400();
        $this->assertUseCaseNotExecuted();
    }

    /**
     * @test
     */
    public function GivenNoBody_WhenTryingToCreateArticle_ThenReturn400AndDoNotExecuteUseCase()
    {
        $query = [
            CreateNewArticle::TITLE => self::TITLE_DATA,
            CreateNewArticle::BODY => null
        ];

        $this->executeWithQuery($query);

        $this->assert400();
        $this->assertUseCaseNotExecuted();
    }

    /**
     * @test
     */
    public function GivenBodyAndTitle_WhenTryingToCreateArticle_ThenReturnArticleCreatedSuccessfully()
    {

    }

}