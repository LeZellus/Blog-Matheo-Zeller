<?php

namespace App\src\controller;

use App\config\Request;
use App\src\model\View;
use App\src\DAO\UserDAO;

abstract class Controller
{
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $userDAO;

    public function __construct()
    {
        $this->view = new View();
        $this->request = new Request();
        $this->userDAO = new UserDAO();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}
