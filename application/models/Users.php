<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/28
 * Time: 下午1:30
 */
class Users extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    //用户登录
    public function login($username=false)
    {
        $sql = "select password from test.users where username = ?";
        $query = $this->db->query($sql,array($username));
        return $query->row_array();//返回结果
    }
    //用户注册
    public function register($u_name,$u_phone,$u_passwd)
    {
        //检验邮箱是否已被注册
        $check_email = $this->db->query("SELECT u_phone from TVCalendar.user WHERE u_phone = {$u_phone} LIMIT 1")->row_array();
        if(!empty($check_email))
        {
            return "phone number already exists";
        }
        else
        {
            $u_token = md5($u_name.$u_phone.$u_passwd.rand(100,999));
            $pwd = password_hash($u_passwd,PASSWORD_DEFAULT); //生成一个哈希密码,双重加密
            $data = array(
                'u_name' => $u_name,
                'u_phone' => $u_phone,
                'u_passwd' => $pwd,
                'u_token' => $u_token,
                'u_status' => 2
            );
            $this->db->insert('TVCalendar.user',$data);
            if($this->db->affected_rows())
            {
                $rs = $this->db->query("SELECT u_name,u_phone,u_passwd,u_token,u_status from TVCalendar.user where u_phone= {$u_phone} LIMIT 1")->row_array();
                return $rs;
            }
        }
        return null;
    }
}