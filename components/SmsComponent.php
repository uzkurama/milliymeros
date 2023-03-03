<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\models\Sms;


class SmsComponent extends Component
{
    public static function send($phone, $message, $callback_url)
    {
        $curl = curl_init();
        $login = SmsComponent::login();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'notify.eskiz.uz/api/message/sms/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('mobile_phone' => $phone,'message' => $message,'from' => '4546','callback_url' => $callback_url),
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $login->token"
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public static function login()
    {
        $prev_sms_model = Sms::find()
            ->where(['id' => Sms::find()->max('id')])
            ->one();
        $sms_model = '';

        if((Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')) - $prev_sms_model->created_at) >= 2505600) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'notify.eskiz.uz/api/auth/login',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('email' => 'uz.kurama@gmail.com','password' => 'FfEauItEUnQv1pOcKIwWevWY6thxvtHvqREVJtvd'),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $r = \yii\helpers\Json::decode($response);
            $sms_model = new Sms();
            $sms_model->token = $r['data']['token'];
            $sms_model->created_at = date('U');
            $sms_model->save();
        }
        else{
            $sms_model = $prev_sms_model;
        }

        return $sms_model;
    }
}