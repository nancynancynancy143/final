<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buyer".
 *
 * @property int $id
 * @property string $name
 * @property string $asl
 * @property string $address
 */
class buyer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buyer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'asl', 'address'], 'required'],
            [['name', 'asl', 'address'], 'string', 'max' => 255],
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
            'asl' => 'Asl',
            'address' => 'Address',
        ];
    }
}
