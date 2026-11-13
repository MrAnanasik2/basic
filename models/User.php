<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string $mail
 * @property string $password
 * @property string $auth_key
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mail', 'password'], 'required'],
            [['name', 'role', 'mail', 'password'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'role' => 'Role',
            'mail' => 'Mail',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
        ];
    }

        // Поиск пользователя по ID
        public static function findIdentity($id)
        {
            return static::findOne($id);
        }
    
        // Поиск пользователя по токену
        public static function findIdentityByAccessToken($token, $type = null)
        {
            return null;
        }
    
        // Поиск пользователя по почте
        public static function findByUsername($username)
        {
            $user = static::find()
                ->where(['name' => $username])
                ->one();
            
            return $user;
        }
    
        // Получение ID
        public function getId()
        {
            return $this->id;
        }
    
        // Получение ключа авторизации
        public function getAuthKey()
        {
            return null;
        }
    
        // Проверка ключа авторизации
        public function validateAuthKey($authKey)
        {
            return false;
        }
    
        // Проверка пароля
        public function validatePassword($password)
{
    // Проверяем пароль в новом формате
    if (Yii::$app->security->validatePassword($password, $this->password)) {
        return true;
    }

    // Поддержка старых аккаунтов с обычным паролем
    if ($this->password === $password) {
        $this->password = Yii::$app->security->generatePasswordHash($password);
        $this->save(false, ['password']);

        return true;
    }

    return false;
}
    
        // Проверка роли администратора
        public function isAdmin()
        {
            return $this->role === 'admin';
        }
}
