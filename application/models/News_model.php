<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_news($slug = FALSE)
	{
    	if ($slug === FALSE)
    	{
        	$query = $this->db->get('TVCalendar.episode');
        	return $query->result_array();
    	}

    	$query = $this->db->get_where('TVCalendar.episode', array('slug' => $slug));
    	return $query->row_array();
	}
    public function get_sets($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('TVCalendar.shows');
            return $query->result_array();
        }

        $query = $this->db->get_where('TVCalendar.shows', array('slug' => $slug));
        return $query->row_array();
    }
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
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
}

?>