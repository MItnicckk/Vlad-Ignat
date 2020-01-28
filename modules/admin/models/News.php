<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "News".
 *
 * @property int $№
 * @property string $Headline
 * @property string $Images
 * @property string $Description
 * @property string $Date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Headline', 'Images', 'Description', 'Date'], 'required'],
            [['Description'], 'string'],
            [['Headline'], 'string', 'max' => 100],
            [['Images'], 'string', 'max' => 255],
            [['Date'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '№' => '№',
            'Headline' => 'Headline',
            'Images' => 'Images',
            'Description' => 'Description',
            'Date' => 'Date',
        ];
    }
}
