<?php
/**
 * Created by PhpStorm.
 * User: mrily
 * Date: 20.03.2019
 * Time: 0:25
 */

namespace app\models;
use yii\db\ActiveRecord;

class Address extends ActiveRecord
{
	public static function tableName() {
		return 'Address';
	}
}