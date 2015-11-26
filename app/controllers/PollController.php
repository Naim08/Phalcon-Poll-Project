<?php

class PollController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	 $this->view->poll = poll::find();
    }

}

