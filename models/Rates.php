<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\validators\RequiredValidator;

class Rates extends ActiveRecord 
{    

    public function rules()
    {
        return [
            ["id", "integer"],
            ["name", "text"],
            ["description", "text"],            
            ["speed", "integer", 'min'=>10, 'max'=>1000, 'tooSmall'=>'Слишком маленкая скорость (меньше 10 Мбит/с)',
            'tooBig'=> 'Слишком большая скорость(больше 100 Мбит/с)'],
            ["price", "integer"]
        ];
    }
}