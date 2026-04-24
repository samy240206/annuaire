<?php
require_once __DIR__ . '/../Models/UserModel.php';

class UserController {

    private $_model;

    public function __construct() {
        $this->_model = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
            $mdp = trim($_POST['mdp']);
            $user = $this->_model->verifyLogin($mail, $mdp);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('location: index.php');
                exit;
            }
        }
        return [
            'titre' => 'Connexion',
            'description' => 'Connectez-vous à votre compte'
        ];
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
            $mdp = trim($_POST['mdp']);
            $this->_model->register($mail, $mdp);
            header('location: index.php?page=user&action=login');
            exit;
        }
        return [
            'titre' => 'Inscription',
            'description' => 'Créez votre compte'
        ];
    }

    public function logout() {
        session_start();
        session_destroy();
        header('location: index.php');
        exit;
    }

}