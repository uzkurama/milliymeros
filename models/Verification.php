<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "verification".
 *
 * @property int $id
 * @property int $verify_code
 * @property int $send_time
 * @property int $expire_time
 * @property int $phone_number
 */
class Verification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'verification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['verify_code', 'send_time', 'expire_time', 'phone_number'], 'required'],
            [['verify_code', 'send_time', 'expire_time', 'phone_number'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'verify_code' => 'Verify Code',
            'send_time' => 'Send Time',
            'expire_time' => 'Expire Time',
            'phone_number' => 'Phone Number',
        ];
    }
}
