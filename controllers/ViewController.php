<?php

namespace app\controllers;

use app\models\Category;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ViewController extends Controller
{

    public function actionAbout()
    {
        $users= Users::find()->all();
        return $this->render('about',compact('users'));
    }

    public function actionHello($id)
    {
        return  $this->render("hello",compact('id'));
    }

    public function actionDell($id)
    {
        $us = Users::findOne($id);
        $us->delete();
        return $this->redirect('?r=view/about');
    }

    public function actionEdit($id)
    {
        if(Yii::$app->request->post()){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $us = Users::findOne($id);
            $us->name = $name;
            $us->email = $email;
            $us->password = $password;
            $us->save();
            return $this->redirect('?r=view/about');
        }

        $us1 = Users::findOne($id);
        return $this->render('edit',compact('us1'));

    }


    public function actionInsert()
    {
        if(Yii::$app->request->post()){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $us = new Users();
            $us->name = $name;
            $us->email = $email;
            $us->password = $password;
            $us->save();
            return $this->redirect('?r=view/about');
        }
        return $this->render('insert');
    }
}
