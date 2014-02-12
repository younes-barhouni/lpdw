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

    function program() {
        $this->smarty->view('header');
        $this->smarty->view($this->pathDirectory . 'program');
        $this->smarty->view('footer');
    }

    function project() {
        $this->smarty->view('header');
        $this->smarty->view($this->pathDirectory . 'project');
        $this->smarty->view('footer');
    }

    function contact() {

        $this->smarty->view('header');
        $this->smarty->view($this->pathDirectory . 'contact');
        $this->smarty->view('footer');
    }

}
