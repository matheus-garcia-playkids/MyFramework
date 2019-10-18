<?php

/*
 * @author Matheus Garcia <matheus.mfgarcia@gmail.com>
 */

namespace Framework;

class Router
{

    public function init($request)
    {

        $request = substr($request,1,strlen($request)-1);
        list($controller,$action) = explode('/',$request);

        Core::$controller = $controller;
        Core::$action = !empty($action) ? $action : 'index';


        $controller_name = "Controller\\".ucfirst(Core::$controller)."Controller";
        new $controller_name(Core::$action);

    }

}