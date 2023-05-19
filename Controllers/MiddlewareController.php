<?php
class MiddlewareController{
public $model;

public function index(){

}

public function routeManager(){
	return require_once('views/auth/login.php');
}

}