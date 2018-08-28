<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/28
 * Time: 上午10:36
 */
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');//加载辅助函数
        $this->load->model('users');//加载数据库模型
    }

    public function tologin()
    {
        $this->load->library('form_validation');//表单显示
        $this->load->view('user/login');

    }
    public function login()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        //表单获取数据
        $data['user_item'] = $this->users->login($data['username']);
        //获取数据库密码
        $data['getpassword'] = $data['user_item']['password'];
        if($data['password'] == $data['getpassword'] && $data['password']!=null)
        {
            $this->load->view('current/currentHot');//数据匹配成功，用户登录。
        }
        else
        {
            $this->load->view('fail');
        }
    }
    public function toregister()
    {
        $this->load->library('form_validation');//表单显示
        $this->load->view('user/register');
    }

    public function register()
    {
        $this->users->register();
        $this->load->view('success');
    }
}