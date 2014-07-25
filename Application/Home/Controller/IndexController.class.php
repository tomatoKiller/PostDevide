<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(version_compare(PHP_VERSION,'5.3.0','>')) {
        	echo "string";
        } else {
        	echo "aaa";
        }
    }
    public function hello() {
    	echo "hello world!";
    }
}