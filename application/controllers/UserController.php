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
        $this->load->config('config',true);
        $this->load->helper('url');//加载辅助函数
        $this->load->model('users');//加载数据库模型
        $this->load->library('session');
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
            $user = array('username' => $data['username'],
                          'password' => $data['password']
            );
            $this->session->set_userdata('user',$user);
            $this->load->view('current/currentHot',$user);//数据匹配成功，用户登录。
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

    //验证码
    public function getcode()
    {
        $this->load->library('captha_new');
        $code = $this->captha_new->getCaptcha();
        $this->session->set_userdata('code', $code);
        $this->captha_new->showImg();
    }

    //session应用测试
//    public function test()
//    {
//        $user = array(
//            'name' => 'you',
//            'age' => '18'
//        );
//        $this->session->set_userdata('user',$user);
//        $user2 = $this->session->userdata('user');
//        $this->load->view('user/test',$user2);
//    }
}