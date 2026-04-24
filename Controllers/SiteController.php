<?php
require_once __DIR__ . '/../Models/SiteModel.php';
require_once __DIR__ . '/../Models/CategoryModel.php';

class SiteController {

    private $_model;
    private $_categoryModel;

    public function __construct() {
        $this->_model = new SiteModel();
        $this->_categoryModel = new CategoryModel();
    }

    public function search() {
        $sites = [];
        $keyword = '';
        $categorieId = 0;

        if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
            $keyword = filter_var(trim($_GET['keyword']), FILTER_SANITIZE_SPECIAL_CHARS);
            $sites = $this->_model->searchByKeyword($keyword);
        }

        if (isset($_GET['categorie_id']) && !empty($_GET['categorie_id'])) {
            $categorieId = filter_var($_GET['categorie_id'], FILTER_SANITIZE_NUMBER_INT);
            $sites = $this->_model->searchByCategory((int)$categorieId);
        }

        return [
            'titre'       => 'Recherche de sites',
            'description' => 'Recherchez un site par catégorie ou mot-clé',
            'sites'       => $sites,
            'categories'  => $this->_categoryModel->list()->fetchAll(),
            'keyword'     => $keyword,
            'categorieId' => $categorieId
        ];
    }

}