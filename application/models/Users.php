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

    public function login($username=false)
    {
        $sql = "select password from test.users where username = ?";
        $query = $this->db->query($sql,array($username));
        return $query->row_array();//返回结果
    }
}