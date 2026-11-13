<?php

namespace app\models;

use yii\db\ActiveRecord;

class Ingredient extends ActiveRecord
{
    public static function tableName()
    {
        return 'ingredients';
    }
}