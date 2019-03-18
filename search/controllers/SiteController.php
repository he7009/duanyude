<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginModel;
use app\models\ContactForm;
use app\behaviors\CtrlBehavior;

class SiteController extends Controller
{


    public function behaviors()
    {
        return [
            'app\behaviors\CtrlBehavior'
        ];
    }


    public function actionIndex()
    {
        echo $this->param_1;

        $this->trigger('event_test_before');
        $this->extendMethodForCtrl();

    }

}
