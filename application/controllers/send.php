<?php
// class send extends CI_Controller {

// 	function index()
// 	{
// 		$this->load->database()
// 		if ($this->load->database()==TRUE)
// {
//     echo 'Database が作成されました!';
// }
// 	}

// 	function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->database();
// 	}

// 	function index()
// 	{
// 			$this->load->view('success');
// 	}
// }

class send extends CI_Model{
    function getData($page){            //取得したデータを『$page』に挿入
        $query = $this->get_where("yone", array("prof" => $page));
                //pageDataのカラム内にあるpageテーブルから情報を取得する
        return $query->result();    //結果を表示する
    }
}
?>