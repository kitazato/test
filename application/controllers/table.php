<?php
class talbe extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Table_model');
    }
    public add(){
        $table_name = 'yone'; //テーブル名
        $fields = array(
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'auto_increment' => TRUE
            ),
            'sex' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'auto_increment' => TRUE
            ),
            'blood' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'auto_increment' => TRUE
            ),
            'kanso' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'auto_increment' => TRUE
            )
        );
        if($this->Table_model->add_table($fields,$table_name)){
            echo $table_name.'を作成しました。';
        }
    }
}
?>