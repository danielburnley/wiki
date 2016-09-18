<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 26/08/16
 * Time: 23:01
 */

namespace danielburnley\Wiki\Api;


use Clearbooks\Dilex\Endpoint;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class EndpointTest extends \PHPUnit_Framework_TestCase
{

    /** @var Endpoint */
    protected $endpoint;

    /** @var Response */
    protected $response;

    protected function executeWithQuery($query)
    {
        $this->response = $this->endpoint->execute(new Request($query));
    }

    protected function assert400()
    {
        $this->assertEquals(400, $this->response->getStatusCode());
    }

}