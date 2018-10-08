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
//    public function login($username=false)
//    {
//        $sql = "select password from test.users where username = ?";
//        $query = $this->db->query($sql,array($username));
//        return $query->row_array();//返回结果
//    }
    //用户注册
    public function register($u_name,$u_phone,$u_passwd)
    {
        //检验邮箱是否已被注册
        $check_phone = $this->db->query("SELECT u_phone from TVCalendar.user WHERE u_phone = {$u_phone} LIMIT 1")->row_array();
        if(!empty($check_phone))
        {
            return "phone number already exists";
        }
        else
        {
            $u_token = md5($u_name.$u_phone.$u_passwd.rand(100,999));
            $pwd = password_hash($u_passwd,PASSWORD_DEFAULT); //生成一个哈希密码,双重加密
            $this->db->query("INSERT into TVCalendar.user (u_name,u_phone,u_passwd,u_token,u_status) 
				values('{$u_name}',{$u_phone},'{$u_passwd}','{$u_token}',2)");
            if($this->db->affected_rows())
            {
                $rs = $this->db->query("SELECT u_id,u_name,u_phone,u_token,u_status from TVCalendar.user where u_phone= {$u_phone} LIMIT 1")->row_array();
                return $rs;
            }
        }
        return null;
    }

    public function login($u_phone,$u_passwd)
    {
        $sql = $this->db->query("SELECT u_id,u_name,u_phone,u_status,u_token,u_passwd FROM TVCalendar.user WHERE u_phone = {$u_phone} and u_status = 2 LIMIT 1")->row_array();
        if(!empty($sql))
        {
            if(password_verify($u_passwd,$sql['u_passwd']))
            {
                return $sql;
            }
            else{
                return null;
            }
        }
        else{
            return null;
        }
    }
}