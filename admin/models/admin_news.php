<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
	资讯mod
 */
class Admin_news extends CI_Model
{
	private $table_name			= 'ci_news';			// news
	private $profile_table_name	= 'ci_news_cate';	// news_cate

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
	}
	
	//得到所有资讯信息参数limit分页
	function get_all($offset = 0, $row_count = 0)
	{
		$news_table = $this->table_name;
		$cate_table = $this->profile_table_name;
		
		if ($offset >= 0 && $row_count > 0)
		{
			$this->db->select("$news_table.*", FALSE);
			$this->db->select("$cate_table.*", FALSE);
			$this->db->join($cate_table, "$cate_table.cate_id = $news_table.cate_id");
			$this->db->order_by("$news_table.news_id", "ASC");
			
			$query = $this->db->get($this->table_name, $row_count, $offset); 
		}
		else
		{
			$query = $this->db->get($this->table_name);
		}
		return $query;
	}
	

}

/* End of file news.php */
/* Location: ./application/models/news.php */