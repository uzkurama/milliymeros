<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'content',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBuyItem()
    {
        $this->layout = 'content';
        return $this->render('buy-item');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->username = \app\components\HelperComponent::phone_cleaner($model->username);
            $model->login();
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionSignup()
    {
        $this->layout = 'login';
        $model = new \app\models\SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->username = (int)\app\components\HelperComponent::phone_cleaner($model->username);
            $model->passport_seria = strtoupper($model->passport_seria);
            $model->signup();

            return $this->redirect(['site/login']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionSendVerify()
    {
        if(Yii::$app->request->post() && Yii::$app->request->isAjax)
        {
           $phone = Yii::$app->request->post('phone');
           $phone = \app\components\HelperComponent::phone_cleaner($phone);
           $code = rand(10000, 99999);
           $status = '';
           if (User::find()->where(['username' => $phone])->exists() != true){
               $verify_model = new \app\models\Verification();
               $verify_model->verify_code = $code;
               $verify_model->send_time = date('U');
               $verify_model->expire_time = (integer)date('U') + 30;
               $verify_model->phone_number = $phone;
               $verify_model->save();
               $callback_url = 'https://milliymeros.uz/site/send-verify';
               $message = "$code - Bu milliymeros.uz tizimida telefon raqamni tasdiqlash kodi";
               $send = \app\components\SmsComponent::send($phone, $message, $callback_url);

               $status = 'sent';
           }
           else{
               $status = 'exist';
           }

           return $status;
        }
    }

    public function actionCheckVerify()
    {
        if(Yii::$app->request->post() && Yii::$app->request->isAjax)
        {
            $submit_verify = Yii::$app->request->post('verify');
            $submit_phone = Yii::$app->request->post('phone');
            $phone = \app\components\HelperComponent::phone_cleaner($submit_phone);
            $verify_model = \app\models\Verification::find()
            ->where(['phone_number' => $phone, 'id' => \app\models\Verification::find()->max('id')])
            ->one();
            $response = '';
            if($verify_model->verify_code == $submit_verify){
                $response = true;
            }
            else{
                $response = false;
            }

            return $response;
        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $this->layout = 'content';
        return $this->render('contact');
    }
}
