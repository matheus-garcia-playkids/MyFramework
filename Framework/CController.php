<?php

/*
 * @author Matheus Garcia <matheus.mfgarcia@gmail.com>
 */

namespace Framework;


abstract class CController
{

    public function __construct($action)
    {
        $this->{'action'.ucfirst($action)}();
    }


}