<?php
class News extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_news','news');
		$this->load->library('noya');
		$this->load->library('fire_php');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
	}
	
	function index(){
		$per_page = $this->input->cookie('c_page')?$this->input->cookie('c_page'):20;
		$res=$this->news->get_all();
		$data['news']=$this->news->get_all($per_page,$per_page)->result_array();//得到数据库记录 
		$this->load->view('backend/news_ajax',$data);
	}
	
	function ajax($offset = 0, $row_count = 0){
		 $row_count = $this->input->cookie('c_page')?$this->input->cookie('c_page'):20;
		 $results=$this->news->get_all($offset,$row_count)->result_array();
		 echo json_encode($results);
	}
	
	//读取数据并cookie分页
	function page(){
		$per_page = $this->input->cookie('c_page')?$this->input->cookie('c_page'):20;
		$res=$this->news->get_all();
		$data["page_num"]=round($res->num_rows()/$per_page,0);
		$url=base_url().'index.php/news/page';
		$num_links=5;
		$this->noya->page($res,$url,$per_page,$num_links);	//分页函数
		$data['news']=$this->news->get_all($this->uri->segment(3)*$per_page,$per_page)->result_array();//得到数据库记录 
		$this->fire_php->fire_start($this->noya->get_last_query());
		$this->load->view('backend/news_list',$data);
	}
	
	//action处理分流
	function action(){
		switch ($this->input->post('btnAction'))
		{
			case 'create':
				$this->create();
			break;
			
			case 'edit' :
				$this->edit();
			break;
			
			case 'delete':
				$this->delete();
			break;
			
			case 'publish' :
				$this->publish();
			break;
			
			case 'unpublish' :
				$this->unpublish();
			break;	
			
			case 'hot' :
				$this->help();
			break;
			
			case 'home' :
				$this->home();
			break;	
			
			case 'help' :
				$this->help();
			break;	
			
			case 'search' :
				$this->search();
			break;	
			
			default:
				redirect('/news/page');
			break;
		}
	}
	
	//创建方法
	function create(){
		echo 321;
	}
	
	function search(){
		redirect('/news/page');
	}
	//编辑方法
	function edit(){
		echo 123;
	}

	//删除方法
	function delete(){
		
	}
	
	//发布方法
	function publish(){
	
	}
	
	//未发布方法
	function unpublish(){
	
	}
	
	//加精方法
	function hot(){
		
	}
	
	//返回首页方法
	function home(){
		redirect('');
	}
	
	function help(){
		redirect('/help');
	}
	
}
?>