<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class AppAdminController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function behaviors(){
		return
		[
		  'access' => [
		           'class' => AccessControl::ClassName(),
		                   'rules' => [
						                [  
								           'allow' => true,
									       'roles' => ['@']
								        ]
								      ]
			           ] 
	    ];
	}
		               
	public function actionLogin()
    {
		if (!Yii::$app->user->isGuest){
			return $this->goHome();
		}
		
		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()){
			return $this->goBack();
		}
		
		$model->password = '';
		return $this->render('login', [
		                     'model' => $model,
							 ]);
	}
}