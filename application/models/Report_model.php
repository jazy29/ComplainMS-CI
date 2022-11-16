<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {

    public $table = 'user_report';
    public $id = 'id';
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

    
    public function save()
    {   
        $post = $this->input->post();


        $this->id               = uniqid();
        $this->status           = $post['status'];
        $this->name             = $post['name'];
        $this->uqid             = $post['uqid'];
        $this->address          = $post['address'];
        $this->age              = $post['age'];
        $this->contactnum       = $post['contactnum'];
        $this->title            = $post['title'];
        $this->description      = $post['description'];
        $this->type             = $post['type'];
        $this->accused_name     = $post['accused_name'];
        $this->date_reported    =date('Y-m-d H:i:s');
        $this->is_read          = 0;
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

    public function notifcontroler($id){
        $data = [
            'is_read' => 1
        ];
            
        $this->db->update('user_report', $data, ['id' => ['id']]);
    }

    public function getDateReport()
    {
        $query = "SELECT date_reported, count(date_reported) as dcount
        FROM user_report
        GROUP by date_reported;";

        return $this->db->query($query)->result_array();
    }
    public function getMonthReport()
    {
        $query = "SELECT monthname(date_reported) as month ,date_reported AS date, COUNT(date_reported) AS mcount 
        FROM user_report 
        GROUP BY month DESC;";

        return $this->db->query($query)->result_array();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('status', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('accused_name', $q);
	$this->db->or_like('uqid', $q);
	$this->db->or_like('address', $q);
    $this->db->or_like('contactnum', $q);
    $this->db->or_like('title', $q);
    $this->db->or_like('description', $q);
    $this->db->or_like('type', $q);
    $this->db->or_like('date_reported', $q);
    $this->db->or_like('description', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }     

    public function cnotif(){
        if(isset($_POST['view'])){

            // $con = mysqli_connect("localhost", "root", "", "notif");
            
            if($_POST["view"] != '')
            {
                $update_query = "UPDATE user_report SET is_read = 1 WHERE is_read=0";
                return $this->db->query($update_query)->result_array();
            }
            $query = "SELECT * FROM user_report ORDER BY id";
            $result = mysqli_query($query);
            $output = '';
            if(mysqli_num_rows($result) > 0)
            {
             while($row = mysqli_fetch_array($result))
             {
               $output .= '
               <li>
               <a href="#">
               <strong>'.$row["name"].'</strong><br />
               <small><em>'.$row["type"].'</em></small>
               </a>
               </li>
               ';
            
             }
            }
            else{
                 $output .= '
                 <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
            }
            
            
            
            $status_query = "SELECT * FROM user_report WHERE is_read=0";
            $result_query = mysqli_query($status_query);
            $count = mysqli_num_rows($result_query);
            $data = array(
                'notification' => $output,
                'unseen_notification'  => $count
            );
            
            echo json_encode($data);
            
            }

    }
}