<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // echo U('Admin/Index/index',Null, 'xml');
        // echo '<br>';
        $data = array(
          'aa' => '1',
          'bb' => '2'
        );
        // $data = 'OK';
        // $this->ajaxReturn($data);
        echo I('id').'<br>';
        // echo I('id').'<br>';
    }

    public function _empty() {
      echo 'empty'.'<br>';
    }

    public function _before_index() {
      echo 'before index<br>';
    }

    public function _after_index() {
      echo '<br>after index';

    }

    public function hello() {
    	echo "hello world!<br>";

    }
}
