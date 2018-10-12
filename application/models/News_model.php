<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function searchDates($dateStart,$dateEnd){
        $dateTimeStart = $dateStart.' 00:00:00';
        $dateTimeEnd = $dateEnd.' 23:59:59';
        //本方法是将指定日期之间所有剧集取出，之后按照日期进行分组返回的方法。日期格式与上面的方法一致
        $episodes = array();    //这个是整理好的原始数组
        $sql = $this->db->query("SELECT * FROM  `episode`
            LEFT JOIN  `shows` ON  `episode`.`s_id` =  `shows`.`s_id`
            WHERE  `episode`.`e_time` >= '{$dateTimeStart}' AND `episode`.`e_time` <= '{$dateTimeEnd}'
            ORDER BY `episode`.`e_time`") ->result_array();
//        $sql = $this->db->query("select * from TVCalendar.episode left join TVCalendar.shows on TVCalendar.episode.s_id = TVCalendar.shows.s_id
//                                  where TVCalendar.episode.e_time = {$dateTimeStart} and TVCalendar.episode.e_time = {$dateTimeEnd} order by TVCalendar.episode.e_time;")->result_array();
        foreach ($sql as $rs) {
            $episodes[] = array(
                'e_id' => $rs['e_id'],
                's_id' => $rs['s_id'],
                'se_id' => $rs['se_id'],
                'e_name' => $rs['e_name'],
                'e_num' => $rs['e_num'],
                'e_status' => $rs['e_status'],
                'e_description' => $rs['e_description'],
                'e_time' => $rs['e_time'],
                'e_eibox_image' => $rs['e_eibox_image'],
                'channel' => $rs['channel']
                );
        }
        
        return $episodes;
    }

    public function setCollect($id)
    {
        $id1=(int)$id;
        $sql = "SELECT * FROM TVCalendar.episode WHERE e_id = ?";
        $query = $this->db->query($sql, array($id1));
        $a=0;
        foreach ($query->result() as $row)
        {
            $a=$row->e_status;
        }
        if($a=0){
            $a=1;
        }else{
            $a=0;
        }
        $data = array(
            'e_status' => $a,
        );
        $where = "e_id = "+$id;
        $this->db->update('episode',$data,$where);
    }

    public function searchRecentByUid($u_id)
    {
        $rs = $this->db->query("SELECT `shows`.`s_id`,s_name,s_name_cn,s_sibox_image,s_description,channel,update_time
            FROM shows 
            LEFT JOIN subscribe ON `shows`.`s_id` = `subscribe`.`s_id` 
            WHERE `subscribe`.`u_id` = {$u_id};")->result_array();
        if(!is_null($rs))
        {
            return $rs;
        }
        else
            return null;
    }

    //根据日期查找当日更新集
    public function searchDates($dateStart,$dateEnd){
        $dateTimeStart = $dateStart.' 00:00:00';
        $dateTimeEnd = $dateEnd.' 23:59:59';
        $episodes = array();
        $sql = $this->db->query("SELECT * FROM  `episode`
            LEFT JOIN  `shows` ON  `episode`.`s_id` =  `shows`.`s_id`
            WHERE  `episode`.`e_time` >= '{$dateTimeStart}' AND `episode`.`e_time` <= '{$dateTimeEnd}'
            ORDER BY `episode`.`e_time`") ->result_array();
        foreach ($sql as $rs) {
            $episodes[] = array(
                'e_id' => $rs['e_id'],
                's_id' => $rs['s_id'],
                'se_id' => $rs['se_id'],
                'e_name' => $rs['e_name'],
                'e_num' => $rs['e_num'],
                'e_status' => $rs['e_status'],
                'e_description' => $rs['e_description'],
                'e_time' => $rs['e_time'],
                'e_eibox_image' => $rs['e_eibox_image'],
                'channel' => $rs['channel']
                );
        }
        
        return $episodes;
    }

    //根据用户名和剧id查找是否该用户收藏该剧
    public function judgeCollect($s_id,$u_id)
    {
        $rs = $this->db->query("SELECT * from subscribe WHERE `u_id` = {$u_id} AND `s_id` ={$s_id};")->result_array();
        if($rs!=null)
            return true;
        return false;
    }

    //点击收藏后向subscribe表内插入数据
    public function setCollect($s_id,$u_id)
    {
        $time=date('y-m-d h:i:s',time());
        $data=array(
            'u_id'=>$u_id,
            's_id'=>$s_id,
            'sub_time'=>$time,
        );
        return $this->db->insert('subscribe', $data);
    }

    //点击不收藏后删除subscribe表内相应内容
    public function cancelCollect($s_id,$u_id){
        return $this->db->delete('subscribe',array('u_id'=>$u_id,'s_id'=>$s_id));
    }
    //根据用户id访问该用户收藏的所有剧
    public function searchRecentByUid($u_id)
    {
        $rs = $this->db->query("SELECT `shows`.`s_id`,s_name,s_name_cn,s_sibox_image,s_description,channel,update_time
            FROM shows 
            LEFT JOIN subscribe ON `shows`.`s_id` = `subscribe`.`s_id` 
            WHERE `subscribe`.`u_id` = {$u_id};")->result_array();
        if(!is_null($rs))
        {
            return $rs;
        }
        else
            return null;
    }

    //获取观看的进度
    public function getSynPercent($s_id,$u_id)
    {
        $numerator = $this->db->query("SELECT COUNT(*) AS `numerator`
            FROM `episode` 
            LEFT JOIN `synchron` ON `episode`.`e_id` = `synchron`.`e_id` 
            WHERE u_id = {$u_id} AND s_id = {$s_id}")->row_array();
        $denominator = $this->db->query("SELECT COUNT(*) AS `denominator`
            FROM `episode` 
            WHERE s_id = {$s_id}")->row_array();
        if ($denominator['denominator'] == 0)
            return 0.0;
        return $numerator['numerator']/$denominator['denominator'];
    }

    //猜我喜欢
    public function guess()
    {
        $rs = $this->db->query("SELECT * FROM subscribe JOIN shows on shows.s_id=subscribe.s_id GROUP BY subscribe.s_id ORDER BY COUNT(*) DESC limit 0,5")->result_array();
        return $rs;
    }
}

?>