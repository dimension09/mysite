<?php

namespace app\controllers;

use mysite\Cache;



class MainController extends AppController
{

    public function indexAction()
    {
      $this->setMeta('Home Shops', 'description....', 'keywords...');
    }
}