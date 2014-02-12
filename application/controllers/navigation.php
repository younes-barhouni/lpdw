<?php

class Navigation extends CI_Controller {

    private $pathDirectory = 'navigation/';

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->smarty->assign("name", "LPDW");

        $this->smarty->view('header');
        $this->smarty->view($this->pathDirectory . 'index');
        $this->smarty->view('footer');
    }

}
