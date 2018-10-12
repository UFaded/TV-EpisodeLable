<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }

    //当日更新的集页面
    public function detail($day = '',$currentNum=1)
    {
        if($currentNum<1){
            $currentNum=1;
        }    
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
        //返回当日更新的所有集array
        $data['news_item'] = $this->news_model->searchDates($dateStart,$dateEnd);
        //总共页数
        $data['num']=1;
        //计算总共页数
        if(count($data['news_item'])%8==0){
            $data['num']=floor(count($data['news_item'])/8);
        }else{
            $data['num']=floor(count($data['news_item'])/8+1);
        }
        if($currentNum>$data['num']){
            $currentNum=$data['num'];
        }

        //在数组内加入是否用户收藏相应的剧
        foreach ($data['news_item'] as &$item) {
            $item['collect'] = $this->news_model->judgeCollect($item['s_id'],2);
        }

        $data['dateStart'] = $dateStart;
        $data['day']=$day;
        $data['d']=date("d", strtotime($day));
        $data['Y']=gmdate("Y", strtotime($day));
        //当前页数
        $data['currentNum']=$currentNum;
        if(isset($_POST['page'])){
            $data['currentNum']=$_POST['page'];
        }

        //根据页数来分割当前日的集数组
        $data['episode']=array();
        for($x=1;$x<=$data['num'];$x++){
            $data['episode'][$x]=array_slice($data['news_item'],($x-1)*8,$x*8);
        }

        if(isset($data['episode'][$currentNum])){
            $data['show']=$data['episode'][$currentNum];
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

    //将该用户点击的剧收藏
    public function setCollect()
    {
        $id=$_POST['a'];
        $bool = $this->news_model->setCollect($id,2);//后面参数为用户id
        echo $bool;
    }

    public function cancelCollect(){
        $id=$_POST['a'];
        $bool = $this->news_model->cancelCollect($id,2);//后面参数为用户id
        echo $id;   
    }
    //用户订阅的剧
    public function collect($currentNum=1){
        if($currentNum<1){
            $currentNum=1;
        }    
        $data['rescentEps'] = $this->news_model->searchRecentByUid(2);//该参数为用户id
        //总共页数
        $data['num']=1;
        //计算总共页数
        if(count($data['rescentEps'])%8==0){
            $data['num']=floor(count($data['rescentEps'])/8);
        }else{
            $data['num']=floor(count($data['rescentEps'])/8+1);
        }
        if($currentNum>$data['num']){
            $currentNum=$data['num'];
        }

        //当前页数
        $data['currentNum']=$currentNum;
        if(isset($_POST['page'])){
            $data['currentNum']=$_POST['page'];
        }

        //在数组内加入用户观看剧的进度
        foreach ($data['rescentEps'] as &$item) {
            $item['percent'] = $this->news_model->getSynPercent($item['s_id'],2);//后面参数为用户id
        }
    
        $data['show']=array();
        
         //根据页数来分割订阅的剧数组
        $data['episode']=array();
        for($x=1;$x<=$data['num'];$x++){
            $data['episode'][$x]=array_slice($data['rescentEps'],($x-1)*8,$x*8);
        }

        if(isset($data['episode'][$currentNum])){
            $data['show']=$data['episode'][$currentNum];
        }
        $this->load->view('collect',$data);
    }

    //猜我喜欢的更多界面（根据收藏前5）
    public function guess(){
        $data['guessEpisodes'] = $this->news_model->guess();
        //在数组内加入是否用户收藏相应的剧
        foreach ($data['guessEpisodes'] as &$item) {
            $item['collect'] = $this->news_model->judgeCollect($item['s_id'],2);
        }
        $this->load->view('guess',$data);

    }
}