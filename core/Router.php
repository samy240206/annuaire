<?php

class Router {

    private $_pages = [
        'categorie' => 'CategoryController',
        'analyse'   => 'AnalyseController',
        'Accueil'   => 'HomeController',
        'user'      => 'UserController',
        'site'      => 'SiteController',
        ''          => 'HomeController'
    ];

    private $_page;
    private $_action;

    public function __construct() {
        $this->_page   = isset($_GET['page']) ? $_GET['page'] : 'Accueil';
        $this->_action = isset($_GET['action']) ? $_GET['action'] : 'list';
    }

    public function dispatch(Smarty $smarty) {
        if (array_key_exists($this->_page, $this->_pages)) {
            $controllerName = $this->_pages[$this->_page];
            require("Controllers/" . $controllerName . ".php");
            $ctrl = new $controllerName();

            if (method_exists($ctrl, $this->_action)) {
                $smarty->assign('tpl', $this->_page . '/' . $this->_action . '.tpl');
                $smarty->assign('vue', $ctrl->{$this->_action}());
                $smarty->display('index.tpl');
            } else {
                http_response_code(404);
            }
        } else {
            http_response_code(404);
        }
    }

}