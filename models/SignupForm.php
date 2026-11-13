<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $mail;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['name', 'mail', 'password', 'password_repeat'], 'required'],

            ['name', 'string', 'max' => 255],

            ['mail', 'email'],
            ['mail', 'string', 'max' => 255],
            ['mail', 'unique',
                'targetClass' => User::class,
                'targetAttribute' => 'mail',
                'message' => 'Пользователь с такой почтой уже зарегистрирован.'
            ],

            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare',
                'compareAttribute' => 'password',
                'message' => 'Пароли не совпадают.'
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'mail' => 'Электронная почта',
            'password' => 'Пароль',
            'password_repeat' => 'Повторите пароль',
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return false;
        }

        $user = new User();

        $user->name = $this->name;
        $user->mail = $this->mail;
        $user->role = 'user';

        // Сохраняем пароль в виде хеша
        $user->password = Yii::$app->security->generatePasswordHash($this->password);

        // Создаём ключ авторизации
        $user->auth_key = Yii::$app->security->generateRandomString(32);

        return $user->save(false);
    }
}