<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/24
 * Time: 上午11:35
 */
class Blogview extends CI_Controller
{
    public function index()
    {
        $data['todo'] = array('clean house', 'call her','behind you');
        $data['title'] = 'My real title';
        $data['heading'] = 'My real Heading';
        $this->load->view('test/demo');
        $this->load->view('test/content',$data);
    }
}