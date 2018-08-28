<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/19
 * Time: 下午5:20
 */
class getInfo extends CI_Model //文件名应与类名相同，且第一个字母必须大写
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getName($name=false)
    {
        if($name===false)
        {
            $query = $this->db->get('demo.info'); //select * from info;
            return $query->result_array();//以数组的形式返回所有查询结果
        }
        $query = $this->db->get_where('demo.info',array('name'=>$name));
        return $query->row_array();
    }

    public function setInfo()
    {
        $this->load->helper('url');
        $name = url_title($this->input->post('name'), 'dash', TRUE);
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age')
        );
        return $this->db->insert('demo.info', $data);
    }
}