<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modgoogle extends CI_Model{
    function __construct() {
       // $this->tableName = 'users';
       // $this->primaryKey = 'email';
        $this->load->database();
    }
   /* public function checkUser($row = array()){
        $this->db->select($this->primaryKey);
        $this->db->from($this->tableName);
        $this->db->where(array('jenis_auth'=>$row['jenis_auth']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            //$data['modified'] = date("Y-m-d H:i:s");
            //$update = $this->db->insert($this->tableName,$data);
            $userID = $prevResult['email'];
        }else{
            //$data['created'] = date("Y-m-d H:i:s");
            //$data['modified'] = date("Y-m-d H:i:s");
            $insert = $this->db->insert($this->tableName,$data);
            $userID = $this->db->insert_id();
        }

        return $userID?$userID:FALSE;
    }*/
    public function checkUser($where)
    {
        return $this->db->get_where('users',$where);
    }
    
   public function register($data)
  {
    return $this->db->insert('users',$data);
  }
}