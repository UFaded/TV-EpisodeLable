<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/24
 * Time: 上午10:27
 */
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $message = 'hi my boyfriend!';
    }

    public function index($message)
    {
        echo 'my name is sonata!';
        echo $message;
    }
    public function comments()
    {
        echo 'Do you like me?';
    }
    public function shoes($name,$age)
    {
        $name = urldecode($name);
        echo $name;
        echo $age;
        echo '你好';
    }

    public function _output($name)
    {
        echo $name;
    }

    private function secret()
    {
        echo 'i love you ZTH';
    }
}