<?php
require_once __DIR__ . '/../core/Model.php';

class UserModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->_table = "Utilisateur";
    }

    public function register(string $mail, string $mdp) {
        $sth = $this->_pdo->prepare("INSERT INTO " . $this->_table . " (mail, mdp) VALUES(:mail, :mdp)");
        $sth->bindParam(':mail', $mail, PDO::PARAM_STR);
        $mdpHash = hash('sha256', $mdp);
        $sth->bindParam(':mdp', $mdpHash, PDO::PARAM_STR);
        return $sth->execute();
    }

    public function verifyLogin(string $mail, string $mdp) {
        $sth = $this->_pdo->prepare("SELECT * FROM " . $this->_table . " WHERE mail = :mail AND mdp = :mdp");
        $sth->bindParam(':mail', $mail, PDO::PARAM_STR);
        $mdpHash = hash('sha256', $mdp);
        $sth->bindParam(':mdp', $mdpHash, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch();
    }

}