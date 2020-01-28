<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_category".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 */
class CmsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cms_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key'], 'required'],
            [['username', 'password', 'auth_key'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
        ];
    }
}
