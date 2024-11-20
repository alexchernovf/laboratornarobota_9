<?php

namespace app\controllers;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['name', 'string', 'min' => 2, 'max' => 50],
            ['name', 'match', 'pattern' => '/^[a-zA-Zа-яА-ЯёЁіІїЇєЄ\s]+$/u', 'message' => 'Name can only contain letters and spaces.'],
        ];
    }
}
