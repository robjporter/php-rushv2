<?php
  class Template extends Controller {
    public function __construct($controller,$action) {
      parent::__construct($controller,$action);
    }
    public function indexAction() {
      $this->view->render('home/index');
    }
    public function alertsAction() {
      $this->view->render('template/alerts');
    }
    public function animationsAction() {
      $this->view->render('template/animations');
    }
    public function buttonsAction() {
      $this->view->render('template/buttons');
    }
    public function cardsAction() {
      $this->view->render('template/cards');
    }
    public function chartsAction() {
      $this->view->render('template/charts');
    }
    public function dialogsAction() {
      $this->view->render('template/dialogs');
    }
    public function effectsAction() {
      $this->view->render('template/effects');
    }
    public function flagsAction() {
      $this->view->render('template/flags');
    }
    public function footersAction() {
      $this->view->render('template/footers');
    }
    public function formsAction() {
      $this->view->render('template/forms');
    }
    public function gradientsAction() {
      $this->view->render('template/gradients');
    }
    public function graphsAction() {
      $this->view->render('template/graphs');
    }
    public function gridAction() {
      $this->view->render('template/grid');
    }
    public function helpersAction() {
      $this->view->render('template/helpers');
    }
    public function imagesAction() {
      $this->view->render('template/images');
    }
    public function jumbotronsAction() {
      $this->view->render('template/jumbotrons');
    }
    public function layoutsAction() {
      $this->view->render('template/layouts');
    }
    public function navbarsAction() {
      $this->view->render('template/navbars');
    }
    public function navigationAction() {
      $this->view->render('template/navigation');
    }
    public function shapesAction() {
      $this->view->render('template/shapes');
    }
    public function slidersAction() {
      $this->view->render('template/sliders');
    }
    public function tablesAction() {
      $this->view->render('template/tables');
    }
    public function typographyAction() {
      $this->view->render('template/typography');
    }
    public function videoAction() {
      $this->view->render('template/video');
    }
  }
