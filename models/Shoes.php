<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shoes".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $amount
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'amount'], 'required'],
            [['name', 'description', 'amount'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'amount' => 'Amount',
        ];
    }
}
