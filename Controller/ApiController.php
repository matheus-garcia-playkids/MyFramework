<?php

/*
 * @author Matheus Garcia <matheus.mfgarcia@gmail.com>
 */

namespace Controller;
use Framework\CController;

class ApiController extends CController
{

    public function __construct($action)
    {
        parent::__construct($action);

    }

    public function actionIndex()
    {
        echo "index";
    }

    public function actionBola()
    {
        echo "bola";
    }


}