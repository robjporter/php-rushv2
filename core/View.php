<?php
  class View {
    protected $_head,$_body,$_cssinclude,$_jquery,$_jsscript,$_jsinclude,$_footer,$_siteTitle = DEFAULT_SITE_TITLE,$_outputBuffer,$_layout = DEFAULT_LAYOUT;

    public function __construct() {

    }
    public function render($viewName) {
      $viewArray = explode('/',$viewName);
      $viewString = implode(DS,$viewArray);
      //$rootString = ROOT.DS.'app'.DS.'views'.DS.DEFAULT_THEME.DS;
      $rootString = ROOT.DS.'themes'.DS.DEFAULT_THEME.DS.'views'.DS;
      if(file_exists($rootString.DS.$viewString.'.php')) {
        include($rootString.$viewString.'.php');
        include($rootString.'layouts'.DS.$this->_layout.'.php');
      } else {
        die('This view \"'.$viewName.'\" does not exist.');
      }
    }
    public function content($type) {
      if($type == 'head') {
        return $this->_head;
      } elseif($type == 'body') {
        return $this->_body;
      } elseif($type == 'css-include') {
        return $this->_cssinclude;
      } elseif($type == 'jquery') {
        return $this->_jquery;
      } elseif($type == 'js-script') {
        return $this->_jsscript;
      } elseif($type == 'js-include') {
        return $this->_jsinclude;
      } elseif($type == 'footer') {
        return $this->_footer;
      }
      return false;
    }
    public function start($type) {
      $this->_outputBuffer = $type;
      ob_start();
    }
    public function end() {
      if($this->_outputBuffer == 'head') {
        $this->_head = ob_get_clean();
      } elseif($this->_outputBuffer == 'body') {
        $this->_body = ob_get_clean();
      } elseif($this->_outputBuffer == 'css-include') {
          $this->_cssinclude = ob_get_clean();
      } elseif($this->_outputBuffer == 'jquery') {
        $this->_jquery = ob_get_clean();
      } elseif($this->_outputBuffer == 'js-script') {
        $this->_jsscript = ob_get_clean();
      } elseif($this->_outputBuffer == 'js-include') {
        $this->_jsinclude = ob_get_clean();
      } elseif($this->_outputBuffer == 'footer') {
        $this->_footer = ob_get_clean();
      } else {
        die('You must first run the start method.');
      }
    }
    public function siteTitle() {
      return $this->_siteTitle;
    }
    public function setSiteTitle($title) {
      $this->_siteTitle = $title;
    }
    public function setLayout($path) {
      $this->_layout = $path;
    }
  }
