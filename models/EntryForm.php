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
            [['name', 'email'], 'required'], // Обов'язкові поля
            ['email', 'email'], // Перевірка формату email
            ['name', 'string', 'min' => 2, 'max' => 50], // Довжина поля name
            ['name', 'match', 'pattern' => '/^[a-zA-Zа-яА-ЯёЁіІїЇєЄ\s]+$/u', 'message' => 'Ім’я може містити тільки літери та пробіли.'], // Тільки літери та пробіли
        ];
    }
}
