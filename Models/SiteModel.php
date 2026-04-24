<?php
require_once __DIR__ . '/../core/Model.php';

class SiteModel extends Model {

    public function __construct() {
        parent::__construct();
        $this->_table = "Sites";
    }

    public function searchByCategory(int $categorieId) {
        $sth = $this->_pdo->prepare("SELECT s.*, c.libelle as categorie 
            FROM " . $this->_table . " s
            JOIN Categorie c ON s.categorie_id = c.id
            WHERE s.categorie_id = :id");
        $sth->bindParam(':id', $categorieId, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll();
    }

    public function searchByKeyword(string $keyword) {
        $search = '%' . $keyword . '%';
        $sth = $this->_pdo->prepare("SELECT s.*, c.libelle as categorie 
            FROM " . $this->_table . " s
            JOIN Categorie c ON s.categorie_id = c.id
            WHERE s.titre LIKE :keyword 
            OR s.url LIKE :keyword 
            OR s.description LIKE :keyword");
        $sth->bindParam(':keyword', $search, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetchAll();
    }

}