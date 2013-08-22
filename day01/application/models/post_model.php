<?php 
class Post_model extends CI_Model {

    protected $table = 'posts' ; 

    public function insert($data)
    {
        $this->db->insert($this->table,$data) ; 
    }

    public function getItems()
    { 
        return $this->db->get($this->table)->result() ; 
    }

    public function delete($id)
    {
        $this->db->where('id',$id) ; 
        $this->db->delete($this->table) ; 
    }

    public function getItem($id)
    {
        $this->db->where('id',$id) ; 
        return $this->db->get($this->table)->result() ; 
    }

    public function update($data)
    {
        $this->db->where('id',$data['id']) ; 
        $this->db->update($this->table,$data) ; 
    }
}
