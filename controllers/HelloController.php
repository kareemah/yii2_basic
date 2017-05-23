<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller{

  public function actionIndex(){
    
    $weigth =48;

  return $this->render('index',[
    'firstname' => 'การีมะห์',
    'lastname' => 'สะดียามู',
    'weigth' => $weigth
  ]


);

  }




}




 ?>
