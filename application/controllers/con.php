<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/19
 * Time: 下午5:26
 */
class con extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();//调用父类中的构造函数，并加载模型，并加载了url辅助函数。
        $this->load->model('getinfo');//加载模型，在控制器的方法中加载并调用。
        //若模型位于子目录下，下载时要带上你的模型所在目录的相对路径
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['info']=$this->getinfo->getName(); //获取所有个人信息
        //$this->model_name->method();可以通过一个和类同名的对象访问模型中的方法
        $data['title']='New';//定于title值

        //将数据传入，view层，传输格式为：('文件夹/文件名',$data)
        $this->load->view('templates/header',$data);
        $this->load->view('info/index',$data);
        $this->load->view('templates/footer');
    }

    public function view($name=null)
    {
        $data['info_item'] = $this->getinfo->getName('程');//获取数据

        if(empty($data['info_item']))
        {
            show_404();
        }
        $data['title'] = $data['info_item']['name'];
        $this->load->view('templates/header',$data);
        $this->load->view('info/view',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');//调用该类库名称，应该先初始化。表单验证类库。

        $data['title'] = 'create a info item';

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('age','Age','required');

        if ($this->form_validation->run()===false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('info/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->getinfo->setInfo();
            $this->load->view('info/success');
        }
    }

}