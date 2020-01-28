<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 13.03.2019
 * Time: 20:35
 */

namespace app\models;
use yii\base\Model;


class EntryForm extends Model
{
    public $name;
    public $email;
    public $date_visit;
    public $age;
    public $favorite_cuisine;
    public $recomend;
    public $text;

    public function rules()
    {
        return [
            [['name', 'email', 'date_visit', 'age', 'favorite_cuisine', 'recomend', 'text'], 'required', 'message' => 'Пустое поле!(' ],
            ['email', 'email'],
            ['name', 'string', 'min' => 5, 'max' => 20],
            ['age', 'integer', 'min' => 18, 'max' => 100],
            ['date_visit', 'date', 'format' => 'php:Y-m-d'],
            ['text', 'trim'],
        ];
    }

}