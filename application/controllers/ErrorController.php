<?php


class ErrorController extends CI_Controller
{
    public function error()
    {
        $this->setData($_REQUEST['type']);
        $this->display();
    }

}
