<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $№
 * @property string $text1
 * @property string $text2
 * @property string $text3
 * @property string $text4
 * @property string $text5
 * @property string $text6
 * @property string $Name1
 * @property string $InfoName1
 * @property string $Name2
 * @property string $InfoName2
 * @property string $contact1
 * @property string $contact2
 * @property string $contact3
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'Name1', 'InfoName1', 'Name2', 'InfoName2', 'contact1', 'contact2', 'contact3'], 'required'],
            [['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'InfoName1', 'InfoName2'], 'string'],
            [['Name1'], 'string', 'max' => 250],
            [['Name2', 'contact1', 'contact2', 'contact3'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '№' => '№',
            'text1' => 'Text1',
            'text2' => 'Text2',
            'text3' => 'Text3',
            'text4' => 'Text4',
            'text5' => 'Text5',
            'text6' => 'Text6',
            'Name1' => 'Name1',
            'InfoName1' => 'Info Name1',
            'Name2' => 'Name2',
            'InfoName2' => 'Info Name2',
            'contact1' => 'Contact1',
            'contact2' => 'Contact2',
            'contact3' => 'Contact3',
        ];
    }
}
