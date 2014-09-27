<?php
    class Table_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->dbforge();
        }
        public function add_table($fields,$table_name){
            if(!$this->db->table_exists($table_name)){
                $this->dbforge->add_field($fields);
                $this->dbforge->add_key('id');
                $this->dbforge->create_table($table_name);
                return true;
            }
        }
    }
?>