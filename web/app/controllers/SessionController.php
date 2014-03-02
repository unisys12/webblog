<?php

class SessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->disable->view();
    }

    /**
     * Log in a current user and start session
     */
    public function startSessionAction()
    {

    	if($this->request->isPost()){
    		$data = $this->request;

    		$username = $data->getPost('username');
    		$password = $data->getPost('password');

    		$user = Users::findFirstByUsername($username);

    		if($user){

    			if($this->security->checkHash($password, $user->password)){
    				//$this->registerSession($user);
	    			//$this->persistent->name = $user->name;
	    			//$this->flashSession->success('Welcome ' . $this->persistent->name);
	    			return $this->response->redirect('user/index');
    			}
            }else{
                $this->flashSession->error("The username you provided is not in our system.");
                //return $this->response->redirect('user/login');
    	    }

    		$this->flashSession->error("Password(" . $password . " - " . $user->password .") does match our records for " . $user->username . " .");
            return $this->response->redirect('user/login');
    	}

    	return $this->response->redirect('user/login');

    }

    public function destroySessionAction()
    {
    	$this->session->destroy();
    }

}

