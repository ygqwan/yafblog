<?php

namespace Db;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\Feature;

abstract class AbstractModel extends AbstractTableGateway {

    protected $table        = NULL;
    protected $metadataJson = NULL;

    protected static $instance = array();

    public static function getInstance() {

        $class = get_called_class();

        if (isset(self::$instance[$class])) {
            return self::$instance[$class];
        } else {
            return (self::$instance[$class] = new $class());
        }

    }

   public function __construct() {

       $this->featureSet = new Feature\FeatureSet();
       $this->featureSet->addFeature(new Feature\GlobalAdapterFeature());

   }

}
