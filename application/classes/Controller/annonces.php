<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Annonces extends Controller_Demo {

	public function action_list()
	{
		$query = DB::select()
		->from('users')
		->join('annonces')
		->on('users.id', '=', 'annonces.posted_by')
		->order_by('created', 'DESC')
		->execute();

		$this->template->content = View::factory('pages/annonceslist')
		->bind('query',$query);
	}

	public function action_add()
	{
		$this->template->content = View::factory('pages/add')
		->bind('departements', $departements)
		->bind('categories', $categories)
		->bind('success', $success);

		$id = $this->request->param('id');

		$departements = ORM::factory('departement')->find_all();
		$categories   = ORM::factory('categorie')->find_all();

		if(HTTP_REQUEST::POST == $this->request->method())
		{
			if(!empty($_POST['titre']))
			{
				if(!empty($_POST['prix']))
				{
					if(!empty($_POST['departements']))
					{
						$annonce = ORM::factory('annonce');
						$id = $this->request->param('id');
						$annonce->titre     = $this->request->post('titre');
						$annonce->content   = $this->request->post('content');
						$annonce->prix      = $this->request->post('prix');
						$annonce->region    = $this->request->post('departements');
						$annonce->categorie = $this->request->post('categories');
						$annonce->posted_by = $id;

						$annonce->save();

						$success = "Votre annonce a bien ete publiee ! Pour la consulter -><a href='" . URL::base() . "annonces/ownannonces/" . $id. "'>ICI</a>";
					}
					else
					{
						$errors3 = "Vous devez obligatoirement remplir votre Localisation... ";
						$this->template->content = View::factory('pages/add')
						->bind('errors3',$errors3)
						->bind('departements', $departements)
						->bind('categories', $categories);
					}
				}
				else
				{
					$errors1 = "Vous devez obligatoirement remplir le Prix... ";
					$this->template->content = View::factory('pages/add')
					->bind('errors1',$errors1)
					->bind('departements', $departements)
					->bind('categories', $categories);
				}
			}
			else
			{
				if(empty($_POST['prix']))
				{
					$errors2 = "Vous devez obligatoirement remplir les champs : Titre & Prix";
					$this->template->content = View::factory('pages/add')
					->bind('errors2',$errors2)
					->bind('departements', $departements)
					->bind('categories', $categories);						
				}
				else
				{
					$errors0 = "Vous devez obligatoirement remplir le Titre... ";
					$this->template->content = View::factory('pages/add')
					->bind('errors0',$errors0)
					->bind('departements', $departements)
					->bind('categories', $categories);	
				}
			}
		}
	}

	public function action_delete()
	{
		$id = $this->request->param('id');
		$annonce = ORM::factory('annonce')->where('id', '=', $id)->find();
		$annonce->delete();

		$this->redirect('annonces/ownannonces/' . $id);
	}

	public function action_update()
	{
		$id = $this->request->param('id');
		$list                  = ORM::factory('annonce')
		->where('posted_by', ' = ', $id)
		->order_by('id', 'DESC')
		->find_all()->as_array();

		$departements = ORM::factory('departement')->find_all();
		$categories   = ORM::factory('categorie')->find_all();

		$this->template->content = View::factory('pages/ownannonces')
		->set('list', $list)
		->bind('departements', $departements)
		->bind('categories', $categories);

		if(HTTP_Request::POST == $this->request->method())
		{
			$annonces = ORM::factory('annonce', $id);
			$annonce = ORM::factory('annonce')->where('id', '=', $annonces->id)->find();

			$annonce->titre = $this->request->post('titre');
			$annonce->prix = $this->request->post('prix');
			$annonce->content = $this->request->post('content');
			$annonce->categorie = $this->request->post('categories');
			$annonce->region = $this->request->post('departements');

			$annonce->update();
			$this->redirect('annonces/ownannonces');
		}
	}

	public function action_ownannonces()
	{	
		$id = $this->request->param('id');
		if(Session::instance()->get('id') == $id)
		{
			$departements          = ORM::factory('departement')->find_all();
			$categories            = ORM::factory('categorie')->find_all();
			$list                  = ORM::factory('annonce')
			->where('posted_by', ' = ', $id)
			->order_by('id', 'DESC')
			->find_all()->as_array();
			$this->template->content = View::factory('pages/ownannonces')
			->set('list', $list)
			->bind('departements', $departements)
			->bind('categories', $categories);
		}
		else
		{
			$this->redirect('annonces/ownannonces/' . Session::instance()->get('id'));
		}
	}
}

?>