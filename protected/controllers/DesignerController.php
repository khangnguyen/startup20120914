<?php

class DesignerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
                                'actions'=>array('index','view', 'create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $model = $this->loadModel($id);
		$dataProvider=new CActiveDataProvider('Portfolio',array(
									'criteria'=>array(
											  'condition'=>"designer_id = " . $model->id)));
											  
		$this->render($model->layout,array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Designer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Designer']))
		{
			$attrs = $_POST['Designer'];
			$model->attributes=$_POST['Designer'];
			$model->userid = $model->email;
			$model->password = $attrs['password'];
                        $model->password_repeat = $attrs['password_repeat'];
			$model->uniqueid = $model->generatePassword(20);
			if ($model->validate('insert')) {
		            $model->encryptPassword();
			    if($model->save(false)) {
			      $this->redirect(array('view','id'=>$model->id));
			    } else {
			      Yii::log(__FUNCTION__."> Error saving user {$model->userid}: " . print_r($model->getErrors(), true), 'warning');
			    }
			}
		}
		$model->password = '';
		$model->password_repeat = '';
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                if (Yii::app()->user->checkAccess('admin') or Yii::app()->user->_id == $model->id) {
		    if(isset($_POST['Designer'])) {
			$attrs = $_POST['Designer'];
			$model->attributes=$_POST['Designer'];

			if($model->save(true)) {
		            $this->redirect(array('view','id'=>$model->id));
                        } else {
			    Yii::log(__FUNCTION__."> Error saving user {$model->userid}: " . print_r($model->getErrors(), true), 'warning');
			}
		    }
		    $this->render('update',array(
						 'model'=>$model,
						 ));
		} else {
		  $this->redirect(array('site/index'));
		}
	
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Designer');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Designer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Designer']))
			$model->attributes=$_GET['Designer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Designer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='designer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
