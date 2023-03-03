<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $username
 * @property string $name
 * @property string $surname
 * @property string $middle_name
 * @property string $passport_seria
 * @property int $passport_number
 * @property string $passport_source
 * @property string $auth_key
 * @property string|null $verification_token
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string|null $email
 * @property string|null $status
 * @property string|null $role
 * @property int $created_at
 * @property int $updated_at
 */
class User2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name', 'surname', 'middle_name', 'passport_seria', 'passport_number', 'passport_source', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['username', 'passport_number', 'created_at', 'updated_at'], 'integer'],
            [['passport_source'], 'string'],
            [['name', 'surname', 'middle_name', 'password_hash', 'password_reset_token', 'email', 'status', 'role'], 'string', 'max' => 255],
            [['passport_seria'], 'string', 'max' => 25],
            [['auth_key'], 'string', 'max' => 32],
            [['verification_token'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'surname' => 'Surname',
            'middle_name' => 'Middle Name',
            'passport_seria' => 'Passport Seria',
            'passport_number' => 'Passport Number',
            'passport_source' => 'Passport Source',
            'auth_key' => 'Auth Key',
            'verification_token' => 'Verification Token',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'role' => 'Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
