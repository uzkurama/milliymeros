<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model
{
    public $username;
    public $name;
    public $surname;
    public $middle_name;
    public $passport_seria;
    public $passport_number;
    public $passport_source;
    public $password;
    public $password_again;
    public $verification;
    public $verification_hidden;

    public function rules()
    {
        return [
            [['username'], 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User'],
            ['username', 'safe'],
            ['verification', 'safe'],
            ['verification_hidden', 'safe'],

            [['name', 'surname', 'middle_name'], 'required'],
            [['name', 'surname', 'middle_name'], 'string', 'max' => 255],

            [['passport_seria', 'passport_number', 'passport_source'], 'required'],
            ['passport_seria', 'string', 'min' => 2, 'max' => 2],
            ['passport_number', 'string', 'min' => 7, 'max' => 7],
            ['passport_source', 'string', 'max' => 1024],

            [['password', 'password_again'], 'required'],
            [['password', 'password_again'], 'string', 'min' => 6],
            ['password_again', 'compare', 'compareAttribute' => 'password', 'message' => "Parollar bir-biriga mos emas"],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->middle_name = $this->middle_name;
        $user->passport_seria = $this->passport_seria;
        $user->passport_number = $this->passport_number;
        $user->passport_source = $this->passport_source;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save(false);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Telefon raqam',
            'name' => 'Ism',
            'surname' => 'Familiya',
            'middle_name' => 'Sharif',
            'passport_seria' => 'Pasport seriayasi',
            'passport_number' => 'Pasport raqam',
            'passport_source' => 'Pasport olingan joyi',
            'auth_key' => 'Auth Key',
            'verification_token' => 'Verification Token',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Elektron pochta',
            'status' => 'Status',
            'role' => 'Role',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
