<?php

namespace app\models;

use yii\db\ActiveRecord;

class Recept extends ActiveRecord
{
    public $ingredientIds = [];

    public static function tableName()
    {
        return 'recept';
    }

    public function rules()
    {
        return [
            [['name', 'class', 'description', 'levl', 'volume',
              'readiness', 'active_work', 'temperature'], 'required'],

            [['description'], 'string'],

            [['volume', 'readiness', 'active_work', 'temperature'], 'number'],

            [['name', 'class', 'levl', 'photo'], 'string', 'max' => 255],

            [['ingredientIds'], 'safe'],
        ];
    }
}