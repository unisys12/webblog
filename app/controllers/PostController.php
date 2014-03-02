<?php

use \Phalcon\Tag;

require('../vendor/erusev/parsedown/Parsedown.php');

class PostController extends ControllerBase{

    /*public function initialize()
    {
        $this->assets->addCss('css/style.css');
    }*/

	// View Post statistics
    public function indexAction()
    {
    	$this->view->posts = Posts::find(array("order" => "created_at DESC"));
    }

    public function createAction()
    {
    	// Display form to create new post
    }

    // Save post to database
    public function saveAction()
    {

    	$request = $this->request;

    	if($request->isPost()){

    		$title = $request->getPost('post_title');
    		$desc  = $request->getPost('post_desc');
    		$content = $request->getPost('post_content');

    		$post = new Posts;
    		$post->post_author = "Phillip Jackson";
    		$post->post_title = $title;
    		$post->post_desc = $desc;
    		$post->post_content = $mdtext;
    		$post->created_at = new Phalcon\Db\RawValue('now()');
    		$post->updated_at = new Phalcon\Db\RawValue('now()');

    		$make = $post->create();

    		if($make){
    			$post = $this->view->post;
    			$this->flashSession->success("Your new post " . $post->title . " has been posted!");
    			return $this->response->redirect();
    		}else{
    			// Display errors
    			echo "Sorry, the following problems were generated: ";
	            foreach ($post->getMessages() as $message) {
	                echo $message->getMessage(), "<br/>";
	            }
    		}

    	}

    	$this->view->disable();
    }

    public function showAction($id)
    {
    	$this->view->post = Posts::findFirstBypost_title($id);
    }

    public function editAction($id)
    {
    	$post = Posts::findFirstBypost_title($id);

    	Tag::setDefault('post_title', $post->post_title);
    	Tag::setDefault('post_desc', $post->post_desc);
    	Tag::setDefault('post_content', $post->post_content);
    	// Hidden fields for timestamps
    	Tag::setDefault('created_at', $post->created_at);
    }

    // Update post
    public function updateAction()
    {

        $request = $this->request;

        $title = $request->getPost('post_title');
        $desc  = $request->getPost('post_desc');
        $content = $request->getPost('post_content');
        $created = $request->getPost('created_at');

        $post = Posts::findFirstBypost_title($title);
        $post->post_author = "Phillip Jackson";
        $post->post_title = $title;
        $post->post_desc = $desc;
        $post->post_content = $content;
        $post->created_at = $created;
        $post->updated_at = new Phalcon\Db\RawValue('now()');

        $update = $post->update($id);

            if($update){
                $post = $this->view->post;
                $this->flashSession->success("The post <i>" . $title . "</i> has been updated!");
                return $this->response->redirect();
            }else{
                // Display errors
                echo "Sorry, the following problems were generated: ";
                foreach ($post->getMessages() as $message) {
                    echo $message->getMessage(), "<br/>";
                }
            }

    	$this->view->disable;
    }

    // Take post offline
    public function offlineAction($id)
    {

    }

    // Remove / Delete Post from database
    public function destroyAction($id)
    {

    }

}

