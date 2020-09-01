<?php

namespace App\src\controller;

use App\config\Parameter;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('home', [
            'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function register($post)
    {
        if ($post->get('submit')) {
            $this->userDAO->register($post);
            $this->session->set('register', 'Votre inscription a bien été effectuée');
            header('Location: ../public/index.php');
        }
        return $this->view->render('register');
    }
}
