<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('user_report')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('user_report', ['id' => $id])->row_array();
    }

    public function getByUqid($uqid)
    {
        return $this->db->get_where('user_report', ['uqid' => $uqid])->row_array();
    }

<<<<<<< HEAD
    public function save()
    {
        $post = $this->input->post();
        $this->load->helper('date');
        
        $this->id               = uniqid();
        $this->status           = $post['status'];
        $this->name             = $post['name'];
        $this->accused_name     = $post['accused_name'];
=======
    
    public function save()
    {   
        $post = $this->input->post();


        $this->id               = uniqid();
        $this->status           = $post['status'];
        $this->name             = $post['name'];
>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab
        $this->uqid             = $post['uqid'];
        $this->address          = $post['address'];
        $this->age              = $post['age'];
        $this->contactnum       = $post['contactnum'];
        $this->title            = $post['title'];
        $this->description      = $post['description'];
        $this->type             = $post['type'];
<<<<<<< HEAD
        $this->date_reported    = NOW();
        $this->is_read          = $post['is_read'];
=======
        $this->accused_name     = $post['accused_name'];
        $this->date_reported    =date('Y-m-d H:i:s');
        $this->is_read          = 0;
>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab
        $this->file             = $this->_uploadFile();

        return $this->db->insert('user_report', $this);
    }

    public function delete($id)
    {
        $this->_deleteFile($id);
        return $this->db->delete('user_report', ['id' => $id]);
    }

    private function _uploadFile()
    {
        $config['upload_path']      = './assets/img/report/';
        $config['allowed_types']    = 'jpg|png|jpeg|pdf|docx';
        $config['file_name']        = $this->id;
        $config['overwrite']        = true;
        $config['max_size']         = '15000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }

    private function _deleteFile($id)
    {
        $report = $this->getById($id);

        if ($report['file'] != 'default.jpg') {
            $file_name = explode(".", $report['file'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/report/$file_name.*"));
        }
    }

    public function getTypeCount()
    {
        $query = "SELECT type, count(type) as tcount 
        FROM user_report 
        GROUP by type;";

        return $this->db->query($query)->result_array();
    }

<<<<<<< HEAD
=======
    public function notifcontroler($id){
        $data = [
            'is_read' => 1
        ];
            
        $this->db->update('user_report', $data, ['id' => ['id']]);
    }

>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab
    public function getDateReport()
    {
        $query = "SELECT date_reported, count(date_reported) as dcount
        FROM user_report
        GROUP by date_reported;";

        return $this->db->query($query)->result_array();
    }
<<<<<<< HEAD
=======
    public function getMonthReport()
    {
        $query = "SELECT monthname(date_reported) as month ,date_reported AS date, COUNT(date_reported) AS mcount 
        FROM user_report 
        GROUP BY month DESC;";

        return $this->db->query($query)->result_array();
    }
>>>>>>> 7392ddf32b7c42a3a21269af76bb78ddf008a2ab

}