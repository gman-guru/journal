<?php
class Controller_Admin_Entry extends Controller_Admin
{

	public function action_index()
	{
		$data['entries'] = Model_Entry::find('all');
		$this->template->title = "Entries";
		$this->template->content = View::forge('admin/entry/index', $data);

	}

	public function action_view($id = null)
	{
		$data['entry'] = Model_Entry::find($id);

		$this->template->title = "Entry";
		$this->template->content = View::forge('admin/entry/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Entry::validate('create');

			if ($val->run())
			{
				$entry = Model_Entry::forge(array(
					'name' => Input::post('name'),
//					'slug' => Input::post('slug'),
					'excerpt' => Input::post('excerpt'),
					'content' => Input::post('content'),
					'published_at' => Input::post('published_at'),
					'user_id' => Input::post('user_id'),
				));

				if ($entry and $entry->save())
				{
					Session::set_flash('success', e('Added entry #'.$entry->id.'.'));

					Response::redirect('admin/entry');
				}

				else
				{
					Session::set_flash('error', e('Could not save entry.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Entries";
		$this->template->content = View::forge('admin/entry/create');

	}

	public function action_edit($id = null)
	{
		$entry = Model_Entry::find($id);
		$val = Model_Entry::validate('edit');

		if ($val->run())
		{
			$entry->name = Input::post('name');
//			$entry->slug = Input::post('slug');
			$entry->excerpt = Input::post('excerpt');
			$entry->content = Input::post('content');
			$entry->published_at = Input::post('published_at');
			$entry->user_id = Input::post('user_id');

			if ($entry->save())
			{
				Session::set_flash('success', e('Updated entry #' . $id));

				Response::redirect('admin/entry');
			}

			else
			{
				Session::set_flash('error', e('Could not update entry #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$entry->name = $val->validated('name');
//				$entry->slug = $val->validated('slug');
				$entry->excerpt = $val->validated('excerpt');
				$entry->content = $val->validated('content');
				$entry->published_at = $val->validated('published_at');
				$entry->user_id = $val->validated('user_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('entry', $entry, false);
		}

		$this->template->title = "Entries";
		$this->template->content = View::forge('admin/entry/edit');

	}

	public function action_delete($id = null)
	{
		if ($entry = Model_Entry::find($id))
		{
			$entry->delete();

			Session::set_flash('success', e('Deleted entry #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete entry #'.$id));
		}

		Response::redirect('admin/entry');

	}

}
