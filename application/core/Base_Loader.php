<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

class Base_Loader extends CI_Loader {

    public $service_suffix = '_Service';
    public $model_suffix = '_Model';

    public function __construct(){
        parent::__construct();
    }

}