<?php
class UserController extends Controller{

  public function filters() {
    return array(
      'accessControl', // perform access control for CRUD operations
    );
  }

  
  public function actions(){
    return array(
      // captcha action renders the CAPTCHA image displayed on the contact page
      'captcha'=>array(
        'class'=>'CCaptchaAction',
        'backColor'=>0xFFFFFF,
      ),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			)
    );
  }
  public function accessRules()
  {
    return array(
      array('allow',  // allow all users to perform 'index' and 'view' actions
        'actions'=>array('create','new','verify','captcha'),
        'users'=>array('*'),
      ),
      array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('profile','update'),
        'users'=>array('@'),
      ),
      array('allow', // allow admin user to perform 'admin' and 'delete' actions
        'actions'=>array('admin'),
        'users'=>array('trafficone'),
      ),
      array('deny',  // deny all users
        'users'=>array('*'),
      ),
    );
  }
  
  public function actionProfile(){
    $this->render('profile');
  }
  public function actionNew()
  {
    $user = new User();

    if(isset($_POST['username'])&&isset($_POST['user_pass'])&&isset($_POST['user_email'])){
      $attributes = array(
        'username'=>$_POST['username'],
        'user_pass'=>md5('%saltsaltsaltsaltsalt%'.isset($_POST['password']).'%saltsaltsaltsaltsalt%'),
        'user_email'=>$_POST['user_email']
      );
      $user->attributes=$attributes;
      if($user->save()){
        echo "User Saved";
      }
    }
  }
  public function actionVerify()
  {
    if(isset($_GET['v'])&&isset($_GET['id'])){
      $user = User::model()->findByPk($_GET['id']);
      if($_GET['v']==$user->user_alias){      $this->render('verify',array('verified'=>true));
      } else {
        $this->render('verify',array('verified'=>false));
      }
    } else {
      //throw me an HTTP error
    }
  }
  
  public function actionAdmin()
  {
    if(isset($_POST['user_id'])&&isset($_POST['attributes'])){
      $user = User::model()->findByPk($_POST['user_id']);
      $attributes = $_POST['attributes'];
      $user->attributes=$attributes;
      if($user->save()){
        echo "User Saved";
      }
    } else {
      $this->render('admin');
    }
  }

  public function actionUpdate()
  {
    //get the user from the application, not the user
    $user = User::model()->findBySql('SELECT * FROM user WHERE username = '.Yii::app()->user->name);
    if(isset($_POST['attributes'])){
      $user->attributes=$attributes;
      if($user->save()){
        echo 'User Saved';
      }
    } elseif (isset($_POST['password'])) {
      $user->user_pass=md5('%saltsaltsaltsaltsalt%'.isset($_POST['password']).'%saltsaltsaltsaltsalt%');
      if($user->save()){
        echo "Password Updated";
      }
    } else {
      throw new CHttpException(400,'There was an error processing your request');
    }
  }
}
  
