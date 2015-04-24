<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Demo {

	// public function action_index()
	// {	
	// 	$this->template->content = View::factory('pages/home');
	// }

	public function action_register()
	{
		$this->template->content = View::factory('pages/home')
		->bind('sucess', $sucess)
		->bind('erroregister', $erroregister);

		if(HTTP_REQUEST::POST == $this->request->method())
		{	
			try{
					$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'	
					));

					$user->add('roles', ORM::factory('role', array('name' => 'login')));

					$sucess = "Vous vous etes bien inscrit au site ! Pensez a vous connecter pour profiter du site !";

			} catch(ORM_Validation_Exception $e) {
				// Set failure message
				$erroregister = "Il y a eu une erreure dans votre inscription ! :(";
			}
    	}
	}

	public function action_login()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$this->template->content = View::factory('pages/home');		
			// Attempt to login user
			$user = Auth::instance()->login($this->request->post('inputLogin'), $this->request->post('inputPassword'));
			// Get the session instance
			$session = Session::instance();
			// If successful, redirect user
			if ($user) 
			{
				$session->set('id', Auth::instance()->get_user()->id);
				$session->set("username", 1);
				$session->set("login", $this->request->post('inputLogin'));
				$session->set("email", Auth::instance()->get_user()->email);
				$this->redirect('users/profil');
			} 
			else
			{
				$failogin = 'Veuillez verifier votre login/password';
				$this->template->content = View::factory('pages/home')
				->bind('failogin', $failogin);
			}
		}
	}

	public function action_logout()
	{
		// Log user out
		Auth::instance()->logout();	
		$session = Session::instance();
		$session->destroy();
		// Redirect to login page
		$this->redirect('annonces/list');
	}

	public function action_profil()
	{
		$this->template->content = View::factory('pages/profil')
		->bind('users', $users);
		$users   = Auth::instance()->get_user();
		$session = Session::instance();
	}

	public function action_updateprofil()
	{
		$this->template->content = View::factory('pages/updateprofil')
		->bind('users', $users);
		$users = Auth::instance()->get_user();
		// Session::instance()->set('login', $this->request->post('username'));
		// var_dump($users);
		if(HTTP_Request::POST == $this->request->method())
		{
			if(!empty($_POST['username']))
			{
				$users          = Auth::instance()->get_user();
				$user           = ORM::factory('user')->where('id', '=', $users->id)->find();
				$user->username = $this->request->post('username');
				$user->update();
				Session::instance()->set('login', $this->request->post('username'));
				$this->redirect('users/updateprofil');
			}
			if(!empty($_POST['email']))
			{
				$users = Auth::instance()->get_user();

				$user = ORM::factory('user')->where('id', '=', $users->id)->find();
				$user->email = $this->request->post('email');
				$user->update();
				Session::instance()->set('email', $this->request->post('email'));
				$this->redirect('users/updateprofil');
			}
			if(!empty($_POST['password']))
			{
				$users = Auth::instance()->get_user();

				$user = ORM::factory('user')->where('id', '=', $users->id)->find();
				$user->password = $this->request->post('password');
				$user->update();
				$this->redirect('users/updateprofil');
			}
			else
			{
				$message = "Vous n'avez rien changer ? ...";
				$this->template->content = View::factory('pages/updateprofil')
				->bind('message', $message)
				->bind('users', $users);
				$users = Auth::instance()->get_user();
			}
		}
	}

	public function action_sendMail() 
	{
		$this->template->content = View::factory('pages/profil')
		->bind('value', $value);
	    $to      = $value['email'];
    	$subject = $this->request->post('titre');
		$message = $this->request->post('content');
		$headers = 'From : enjoyhoupa@noos.fr' . "\r\n" .
		'Reply-To: '. SESSION::instance()->get("email") . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

    	// mail($to, $subject, $message, $headers);

    	// ErrorException [ Warning ]: mail(): Failed to connect to mailserver 
    	// at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; 
    	// setting in php.ini or use ini_set()
	}

}