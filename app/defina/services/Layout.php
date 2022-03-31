<?php

namespace app\defina\services;

class Layout {

    public $page;
    public $title;
    public $html;



    // public function __construct($title, $page, $html) 
    // {
    //     $this->page = $page;
    //     $this->title = $title;
    //     $this->title = $html;
    // }

    public function render($file) 
    {
        include $file;
    }


    public function __get($html) 
    {
        return [
            'page' => $page,
            'html' => $this->$html,
        ];
    }

}