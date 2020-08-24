<?php

namespace App\src\controller;

class FrontController extends Controller
{
    private $articleDAO;
    private $commentDAO;

    // Function to display home page
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        require '../templates/home.php';
    }

    // Function to get article by id
    public function article(Int $articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        require '../templates/single.php';
    }

    // Function to register user
    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $this->userDAO->register($post);
            $this->session->set('register', 'Votre inscription a bien été effectuée');
            header('Location: ../public/index.php');    
        }
        return $this->view->render('register');
    }
}
