<?php

  class Home extends Controller {
    public function __construct($controller,$action) {
      parent::__construct($controller,$action);
      //$this->view->setLayout(DEFAULT_THEME);  //Can override default theme
    }
    public function indexAction() {
      $this->view->render('home/index');
    }
  }
