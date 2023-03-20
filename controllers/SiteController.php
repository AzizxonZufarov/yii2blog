<?php

namespace app\controllers;

use app\models\Categories;
use app\models\Comments;
use app\models\Friends;
use app\models\Posts;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\User;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $session= Yii::$app->session;
        $session->open();
        $users = $_SESSION['id'];
        $cats= Categories::find()->all();
        $friends= Friends::find()->all();
        $posts= Posts::find()->all();
        return $this->render('index',compact('cats', 'friends', 'posts', 'users'));
    }

    public function actionCategory($id)
    {
        $cats= Categories::find()->all();
        $friends= Friends::find()->all();
        $posts= Posts::find()->where(['cat_id'=>$id])->all();
        return $this->render('category',compact('cats', 'friends', 'posts'));
    }

    public function actionDetail($id)
    {
        $cats = Categories::find()->all();
        $friends = Friends::find()->all();
        $detail = Posts::findOne($id);
        $comments = Comments::find()->where(['post_id'=>$id])->all();

        if(Yii::$app->request->post()){
            $model = Posts::findOne($id);
            $author = $_POST['author'];
            $text = $_POST['text'];
            $email = $_POST['email'];
            $post_id = $model->id;
            $us = new Comments();
            $us->author = $author;
            $us->text = $text;
            $us->email = $email;
            $us->post_id = $post_id;
            $us->save();
            return $this->refresh();
//            return $this->redirect(['site/detail', 'id'=>$cat_id]);
        }
        return $this->render('detail',compact('cats', 'friends', 'detail', 'comments'));
    }



    public function actionReg()
    {
        $cats= Categories::find()->all();
        $friends= Friends::find()->all();


        if(Yii::$app->request->post()){
            $name = $_POST['name'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $us = new Users();
            $us->name = $name;
            $us->login = $login;
            $us->password = $password;
            $us->email = $email;
            $us->save();
            return $this->refresh();
//            return $this->redirect(['site/detail', 'id'=>$cat_id]);
        }
        return $this->render('reg',compact('cats', 'friends'));
    }

    public function actionAuth()
    {
        $cats= Categories::find()->all();
        $friends= Friends::find()->all();
        if(Yii::$app->request->post()){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $users = Users::find()->where(['login'=>$login, 'password'=>$password])->one();
            if($users){
                $session= Yii::$app->session;
                $session->open();
                $_SESSION['id']=$users->id;
                return $this->redirect(['site/cab']);
            }else{
                return $this->refresh();
            }
        }
        return $this->render('auth', compact('cats', 'friends'));
    }


    public function actionCab()
    {
        $cats = Categories::find()->all();
        $friends = Friends::find()->all();
        $session= Yii::$app->session;
        $session->open();
        $id =  $_SESSION['id'];
        $users = Users::findOne($id);

        return $this->render('cab',compact('cats', 'friends', 'users'));
    }

    public function actionEditcab($id)
    {
        $cats = Categories::find()->all();
        $friends = Friends::find()->all();
        if (Yii::$app->request->post()) {
            $name = $_POST['name'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $img = $_POST['img'];

            $users = Users::findOne($id);
            $users->name = $name;
            $users->login = $login;
            $users->password = $password;
            $users->email = $email;
            if($img != NULL){
                $users = Users::findOne($id);
                $old = $users->img;
                unlink("regupl/".$old);
                move_uploaded_file($_FILES['img']['tmp_name'],"regupl/" . $img);
                $users->img = $img;
            }
            $users->save();
            return $this->redirect('?r=site/cab');
        }
        $users = Users::findOne($id);
        return $this->render('editcab', compact('users', 'cats', 'friends'));
    }


    public function actionLogout($id)
    {
           $users = Users::findOne($id);
           $_SESSION['id'] = $users->id;
           unset($_SESSION['id']);
           return $this->redirect('?r=site/index');

    }

}
//fileupload
//alias
//Yii::getAlias("@web")."/upl/" . $img);