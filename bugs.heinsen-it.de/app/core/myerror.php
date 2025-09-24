<?php
namespace hitbugsreader\app\core;
use hitbugsreader\app\core\controller;

class myerror extends controller {

	private $_error = null;

	public function __construct($error){
		parent::__construct();
		$this->_error = $error;
	}

	public function index(){
		//display the error and stop
                $data['title'] = '404 Seite nicht gefunden';
	          	$data['error'] = $this->_error;
                 $this->_view->render('header', $data);
                 $this->_view->render('error/404',$data);
                 $this->_view->render('footer',$data);
		
	}

}