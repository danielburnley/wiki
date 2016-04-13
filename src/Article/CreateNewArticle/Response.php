<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 13/03/16
 * Time: 18:33
 */

namespace Pintsize\Wiki\Article\CreateNewArticle;


class Response
{
    /** @var array */
    private $errors;

    /** @var bool */
    private $successful = false;

    /**
     * Response constructor.
     */
    public function __construct()
    {
        $this->errors = [];
    }

    public function getErrors() : array
    {
        return $this->errors;
    }

    /**
     * @param $error
     */
    public function setError($error)
    {
        $this->errors[] = $error;
    }

    public function isSuccessful()
    {
        return $this->successful;
    }

    /**
     * @param boolean $successful
     */
    public function setSuccessful($successful)
    {
        $this->successful = $successful;
    }


}