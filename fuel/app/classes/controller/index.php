<?php

class Controller_Index extends Controller_Template
{

	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		$this->template->title = 'Index &raquo; View';
		$this->template->content = View::forge('index/view', $data);
	}

}
