<?php

/**
 * Created by PhpStorm.
 * User: dan
 * Date: 09/03/16
 * Time: 17:20
 */

namespace danielburnley\Wiki\Core\Article\Entity;

interface Article
{

    public function getTitle() : string;

    public function getBody() : string;

}