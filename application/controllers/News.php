<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        // $this->load->helper('url_helper');
    }

    public function index()
    {
        // $data['news'] = $this->news_model->get_news();
        // $data['title'] = 'News archive';

        // $this->load->view('templates/header', $data);
        $this->load->view('news/index');
        // $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        // $data['news_item'] = $this->news_model->get_news($slug);

        // if (empty($data['news_item']))
        // {
        //     show_404();
        // }

        // $data['title'] = $data['news_item']['title'];

        // $this->load->view('templates/header', $data);
        // $this->load->view('news/view', $data);
        // $this->load->view('templates/footer');
    }
    public function create()
    {
        // $this->load->helper('form');
        // $this->load->library('form_validation');

        // $data['title'] = 'Create a news item';

        // $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('text', 'Text', 'required');

        // if ($this->form_validation->run() === false)
        // {
        //     $this->load->view('templates/header', $data);
        //     $this->load->view('news/create');
        //     $this->load->view('templates/footer');

        // }
        // else
        // {
        //     $this->news_model->set_news();
        //     $this->load->view('news/success');
        // }
    }
    public function detail($day = '')
    {
        //获取当前日期，如果日期为空取今天日期
        if (empty($day)) 
        {
            $day = date('Y-m-d');
            $dateStart = date('Y-m-d');
            $dateEnd = date('Y-m-d');
        }
        else
        {
            $dateStart = $day;
            $dateEnd = $day;
        }
        // 传参数据赋值
        $data['news_item'] = $this->news_model->searchDates($dateStart,$dateEnd);
        $data['dateStart'] = $dateStart;
        $data['day']=$day;
        $data['d']=date("d", strtotime($day));
        $data['Y']=gmdate("Y", strtotime($day));
        $data['currentNum']=1;
        // $data['page']=$_POST['page'];
        $data['num']=1;
        $data['show']=array();
        if(count($data['news_item'])%8==0){
            $data['num']=count($data['news_item'])/8;
        }else{
            $data['num']=count($data['news_item'])/8+1;
        }
        for($x=1;$x<=$data['num'];$x++){
            $data['show'][$x]=array_slice($data['news_item'],($x-1)*8,$x*8);
        }
        // 获取当前日期的英文月份
        if(gmdate("m", strtotime($day))==1){
            $data['m']='January';
        }else if(gmdate("m", strtotime($day))==2){
            $data['m']='February';
        }else if(gmdate("m", strtotime($day))==3){
            $data['m']='March';
        }else if(gmdate("m", strtotime($day))==4){
            $data['m']='April';
        }else if(gmdate("m", strtotime($day))==5){
            $data['m']='May';
        }else if(gmdate("m", strtotime($day))==6){
            $data['m']='June';
        }else if(gmdate("m", strtotime($day))==7){
            $data['m']='July';
        }else if(gmdate("m", strtotime($day))==8){
            $data['m']='August';
        }else if(gmdate("m", strtotime($day))==9){
            $data['m']='September';
        }else if(gmdate("m", strtotime($day))==10){
            $data['m']='October';
        }else if(gmdate("m", strtotime($day))==11){
            $data['m']='November';
        }else if(gmdate("m", strtotime($day))==12){
            $data['m']='December';
        }
        $this->load->view('detail',$data);
    }
    public function detailpre($slug = NULL)
    {
        $this->load->view('news/detail_pre');
    }
    public function login($slug = NULL)
    {
        $this->load->view('news/login.html');
    }
    public function register($slug = NULL)
    {
        $this->load->view('news/register');
    }
    public function setCollect()
    {
        $id = $_GET["a"];
        return $id;
    }

    public function collect($slug=NULL){

        $data['rescentEps'] = $this->news_model->searchRecentByUid(7);
        $data['num']=1;
        $data['show']=array();
        if(count($data['rescentEps'])%8==0){
            $data['num']=count($data['rescentEps'])/8;
        }else{
            $data['num']=count($data['rescentEps'])/8+1;
        }
        $data['currentNum']=1;
        $this->load->view('collect',$data);
    }
}