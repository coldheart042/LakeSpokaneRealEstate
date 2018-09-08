<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 5:57 AM
 */
class NavView
{
    private $model;
    private $controller;

    public function __construct($NavModel, $NavController)
    {
        $this->model = $NavModel;
        $this->controller = $NavController;
    }

    public function output(){
        $arr = $this->model->data;
        $name = $this->model->name;
        $tags = "";

        foreach ($arr as $item => $value){ # {"Home" => "index.php"}
            if($item == $name){
                $tags = $tags . "<li>$name</li>\n";
            }
            else{
                $tags = $tags . "<li><a href='$value'>$item</a></li>\n";
            }
        }
        return $tags;
    }
}