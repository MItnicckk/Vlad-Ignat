<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 22.03.2019
 * Time: 23:01
 */

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public function rules()
    {
        return [
            [[ 'name','id'], 'required', 'message' => 'Пустое поле!(' ],
        ];
    }


}