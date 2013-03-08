<?php

use Db\PostsModel;

class IndexController extends ApplicationController {

    protected $layout = 'frontend';

    public function indexAction() {
        dump(PostsModel::getInstance());
       $this->heading = 'Yaf Blog';
    }

}
