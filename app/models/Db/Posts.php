<?php

namespace Db;

class PostsModel extends AbstractModel {

    protected $table = "posts";

    public function __construct() {
        parent::__construct();
        $this->initialize();
    }
}
