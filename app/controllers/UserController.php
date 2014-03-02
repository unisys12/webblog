<?php

use Phalcon\Tag as Tag;

class UserController extends ControllerBase{

    public function indexAction()
    {

        if(isset($user_name)){
            $this->view->name = $this->session->get('user_name');
        }

    }

    public function createAction()
    {

    }

    public function saveAction()
    {

    	if($this->request->isPost()){

    		$request = $this->request;

    		$name = $request->getPost('name');
    		$email = $request->getPost('email');
    		$username = $request->getPost('username');
    		$password = $request->getPost('password');
    		$password_confirm = $request->getPost('password_confirm');

    		if($password != $password_confirm){
    			$this->flashSession->error('Passwords do not match');
    			return $this->response->redirect();
    		}

    		$user = new Users();
    		$user->name = $name;
    		$user->email= $email;
    		$user->username = $username;
    		$user->password = password_hash($password, PASSWORD_DEFAULT);
    		$user->created_at = new Phalcon\Db\RawValue('now()');
    		$user->updated_at = new Phalcon\Db\RawValue('now()');

    		if(!$user->save()){
    			foreach($user->getMessages() as $message){
    				$this->flashSession->error((string) $message);
    			}
    		} else {
    			$this->flashSession->success('Thanks for singing up ' . $user->name . '. Please <a href="http://http://localhost/blog-local/user/login"> log</a> in to get started.');
    			return $this->response->redirect();
    		}

    	}

    	$this->view->disable();

    }

    public function loginAction()
    {
        // Display the log in form
    }

    public function authAttemptAction()
    {
        $request = $this->request;

        if($request->isPost()){

            $auth = new Auth();

            $username = $request->getPost('username');
            $password = $request->getPost('password');

            if( $auth->attempt($username, $password) ){

                $user = Users::findFirstByUsername($username);

                $this->session->start();
                $this->session->set('user_name', $user->name);
                $this->session->set('user_email', $user->email);

                //$this->flashSession->success('Welcome ' . $name);
                return $this->response->redirect();
            }

        $this->flashSession->error('The Username / Password provided does not match our current records!');
        return $this->response->redirect('user/login');

        }

        // Disable view if not request is not POST
        $this->view->disable();

    }

    public function logoutAction()
    {
        $this->session->remove('username');
        $this->session->destroy();

        $this->flashSession->success('You have logged out!');
        return $this->response->redirect();
    }

}

