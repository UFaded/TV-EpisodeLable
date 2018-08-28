<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/28
 * Time: 上午10:36
 */
class UserController extends CI_Controller
{
    public function tologin()
    {
        $this->load->helper('url');//辅助函数，解决site_url问题。
        $this->load->library('form_validation');//表单显示
        $this->load->view('user/login');

    }
    public function login()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('users');//加载模型，在控制器的方法中加载并调用。
//        $this->form_validation->set_rules('username','Username','required');
//        $this->form->validation->set_rules('password','Password','required');
//        if($this->form_validation->run()==false)
//        {
//            $this->load->view('fail');
//        }
//        else
//        {
//            $this->load->view('success');
//        }
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
        else if($data['password'] != $data['getpassword'])
        {
            $this->load->view('fail');
        }
    }
    public function toregister()
    {
        $this->load->view('user/register');
    }
}