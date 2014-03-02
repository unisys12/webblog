<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->posts = Posts::find(array("order" => "created_at DESC"));
    }

}
