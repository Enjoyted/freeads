<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Searchs extends Controller_Demo {

	public function action_index()
	{
		$this->template->content = View::factory('pages/search')
		->bind('departements', $departements)
		->bind('categories', $categories);

		$departements = ORM::factory('departement')->find_all();
		$categories   = ORM::factory('categorie')->find_all();
	}

	public function action_search()
	{
		if($this->request->method() == HTTP_Request::POST)
		{

			// $query = DB::select()
			// ->from('users')
			// ->join('annonces')
			// ->on('users.id', '=', 'annonces.posted_by')
			// ->order_by('created', 'DESC')
			// ->execute();

			$search = ORM::factory("annonce");
			$search->where_open();
			foreach ($_POST as $key => $value) 
			{
				if (empty($value) === false)
				{
					$search->where($key, 'LIKE', "%".$value."%");
				}
			}

			$search->where_close();

			$data = $search
			->order_by('created', 'DESC')
			->find_all()
			->as_array();
		}
			$view = View::factory('pages/resultsearch')
			->bind('search', $data);
			$this->template->content = $view;		
	}

}