<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 1/12/2017
 * Time: 5:58 AM
 */
class NavController
{
    private $model;

    public function __construct($NavModel)
    {
        $this->model = $NavModel;
    }
}