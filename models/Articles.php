<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 20.03.2019
 * Time: 0:25
 */

namespace app\models;
use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
	public static function tableName() {
		return 'Articles';
	}
    // public function getOtdelenie()
    // {
    //     return $this->hasMany(Otdelenie::className(), ['Comand_riadovoy' => 'id']);
    // }
}