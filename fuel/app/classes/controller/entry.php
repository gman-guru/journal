<?php

class Controller_Entry extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
                
                $data['entries'] = Model_Entry::find('all');
                
		$this->template->title = 'Entry &raquo; Index';
		$this->template->content = View::forge('entry/index', $data);
	}

	public function action_view($id = null)
	{
		$data["subnav"] = array('view'=> 'active' );
                
                is_null($id) and Response::redirect('entry');
                
                if (!$data['entry'] = Model_Entry::find($id))
                {
                    Session::set_flash('error', 'Could not find entry #' . $id);
                    Response::redirect('entry');
                }


                $this->template->title = 'Entry &raquo; View';
		$this->template->content = View::forge('entry/view', $data);
	}

}
