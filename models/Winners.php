<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 20.03.2019
 * Time: 0:25
 */

namespace app\models;
use yii\db\ActiveRecord;

class Winners extends ActiveRecord
{
	public static function tableName() {
		return 'Winners';
	}
    // public function getOtdelenie()
    // {
    //     return $this->hasMany(Otdelenie::className(), ['Comand_riadovoy' => 'id']);
    // }
}