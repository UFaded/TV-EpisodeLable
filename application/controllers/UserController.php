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
        $this->load->config('config', true);
        $this->load->helper('url');//加载辅助函数
        $this->load->model('users');//加载数据库模型
        $this->load->library('session');
    }

    public function tologin()
    {
        $this->load->library('form_validation');//表单显示
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');

    }

    public function toregister()
    {
        $this->load->library('form_validation');//表单显示
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function register()
    {
        $this->users->register();
        $this->load->view('success');
    }

    public function ajaxRegister()
    {
        $this->load->model('Users');
        $u_name = $this->load->escape($this->load->post('u_name',true));
        $u_phone = $this->load->escape($this->load->post('u_phone',true));
        $u_passwd = $this->load->escape($this->load->post('u_passwd',true));
        $u_passwd = substr($u_passwd,1,-2);
        //截取密码片段
        //$u_name and $u_phone都不可能为空

        $u_passwd = md5($u_passwd);

        $result = $this->Users->register($u_name,$u_phone,$u_passwd);
        if ($result!=null)
        {
            if($result == "phone number already exists")
            {
                echo "Password duplicated";
            }
            else
            {
                $u_data = array(
                    'u_id' =>$result['u_id'],
                    'u_name' =>$result['u_name'],
                    'u_phone' =>$result['u_phone'],
                    'u_passwd' =>$result['u_passwd'],
                );

                $this->session->set_userdata($u_data);
                echo "Insert the success";
            }
        }
        else {
            echo "Insert the failure";
        }
    }

}