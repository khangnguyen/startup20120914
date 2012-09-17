<?php

class AdminController extends Controller
{
        public $layout='//layouts/column2';
        public function accessRules() {
	  return array(
		       array('allow',
			     'actions'=>array('index'),
			     'roles'=>array('admin'),
			     ),
		       array('deny',  // deny all users
			     'users'=>array('*')
			     ),
		       );
        }
	public function actionIndex()
	{
		$this->render('index');
	}

}