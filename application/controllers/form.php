<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$config = array(
			array(
				'field' => 'name',
				'label' => '名前',
				'rules' => 'trim|callback_username_check|required|min_length[5]|max_length[12]|xss_clean'
				),
			array(
				'field' => 'sex',
				'label' => '性別',
				'rules' => 'required'
				),
			array(
				'field' => 'blood',
				'label' => '血液型',
				'rules' => 'required'
				),
			array(
				'field' => 'kanso',
				'label' => '感想',
				'rules' => 'trim|required|xss_clean'
				)
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', '記入漏れ');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('myform');
			}
			else
			{
				$this->load->view('formsuccess');
			}
		}
		function username_check($str)
		{
			if ($str == 'うんこ')
			{
				$this->form_validation->set_message('username_check', '%s に、"うんこ"は使えません');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
}
?>