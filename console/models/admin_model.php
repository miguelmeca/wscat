<?php
class Admin_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
    }
	public function get_full_user_by_username($username = '')
	{
		$this->db->where('cr_admins.username', $username);
		return $this->db->select('cr_admins.uid, cr_admins.username, cr_admins.password,cr_admins.status')
		  ->from('cr_admins')
		  ->get()
		  ->row();
	}
}
?>