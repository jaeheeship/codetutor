<?php

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct() ; 
        $this->load->database() ; 
    }
    public function writeform($id=null)
    { 
        $this->load->model('post_model') ; 
        $result = array() ;  
        if($id){
            $data = $this->post_model->getItem($id) ; 
            $result['blog'] = $data[0] ; 
        }else{
            $result['blog'] = new stdClass ; 
        }
        $this->load->view('writeform',$result) ; 
    }

    public function save()
    {
        $title = $this->input->post('title') ; 
        $content = $this->input->post('content') ; 
        $id = $this->input->post('id') ; 

        $this->load->model('post_model') ; 

        if($id) { 
            $this->post_model->update(compact('title','content','id')) ; 
        }else{ 
            $this->post_model->insert(compact('title','content')) ; 
        } 

        $this->load->helper('url') ; 

        redirect('/blog/getList') ; 
    }

    public function getList()
    {
        $this->load->model('post_model') ; 
        $items = $this->post_model->getItems() ; 

        $this->load->view('list',array('blog_list'=>$items)) ; 
    }

    public function deleteItem($id)
    { 
        $this->load->model('post_model') ; 
        $this->post_model->delete($id) ; 

        $this->load->helper('url') ; 

        redirect('/blog/getList') ; 
    }
} 
