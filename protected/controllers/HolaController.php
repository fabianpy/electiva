<?php

#http://localhost/yii/electiva/protected/views/hola/index
class HolaController extends Controller
{
	public function actionIndex()
	{
	
	    $model=CActiveRecord::model("Users")->findAll();
		$twitter ="@codigo";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
		
	}
}