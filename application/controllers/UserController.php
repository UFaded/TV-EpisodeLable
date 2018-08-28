<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/28
 * Time: 上午10:36
 */
class UserController extends CI_Controller
{
    public function login()
    {
        $this->load->view('user/login');
    }
    public function register()
    {
        $this->load->view('user/register');
    }
}