<?php

namespace mysite\base;

use mysite\Db;



abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}