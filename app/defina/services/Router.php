<?php

namespace app\defina\services;

use  app\defina\services\Layout;

class Router {

    private static $list = [];

    public static function get($uri, $file, $array = [])
    {
        self::$list[] = [
            'uri' => $uri,
            'page' => $file,
            'html' => $array
        ];
    }

    public static function enable()
    {
        $query = $_GET['query'];
        
        foreach(self::$list as $route) {
            
            if($route['uri'] === '/'.$query) {
                //$index = Layout::Page($route['html']);
                $tmpl = new Layout();
                $tmpl->page = $route['html'];
                $tmpl->html = $route['page'];
                $tmpl->render('assets/layout/main.php');
                //include 'view/pages/'.$route['page'].'.php';
                die();
            }
        }
        self::PageNotFound();
    }

    private static function PageNotFound()
    {
        require_once 'app/defina/error.php';
    }

}