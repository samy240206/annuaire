<?php

require_once __DIR__ . '/Db.php';

/**
 * Description of Model
 *
 * @author Kevin
 */
class Model {

    protected $_pdo;
    protected $_table;

    /**
     * Instancie l'attribut PDO depuis mon Singleton
     * 
     */
    public function __construct() {
        $this->_pdo = Db::getInstance()->getPdo();
    }
    /**
     * Retourne le jeu d'enregistrement des catégories
     * 
     * @return PDOStatement
     */
    public function list() {
        $sql = "select * from " . $this->_table;
        return $this->_pdo->query($sql);
    }

    public function delete(int $unId) {
    $sth = $this->_pdo->prepare("DELETE FROM " . $this->_table . " WHERE id = :id");
    $sth->bindParam(':id', $unId, PDO::PARAM_INT);
    return $sth->execute();
}

}
