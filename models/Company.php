<?php

namespace app\models;
use app\models\buyer;
use app\models\Shoes;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property int $shoes_id
 * @property string $location
 * @property int $buyer_id
 * @property string $name
 *
 * @property Buyer $buyer
 * @property Shoes $shoes
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoes_id', 'location', 'buyer_id', 'name'], 'required'],
            [['shoes_id', 'buyer_id'], 'integer'],
            [['location'], 'string'],
            [['name'], 'string', 'max' => 60],
            [['buyer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Buyer::className(), 'targetAttribute' => ['buyer_id' => 'id']],
            [['shoes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoes_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shoes_id' => 'Shoes ID',
            'location' => 'Location',
            'buyer_id' => 'Buyer ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyer()
    {
        return $this->hasOne(Buyer::className(), ['id' => 'buyer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShoes()
    {
        return $this->hasOne(Shoes::className(), ['id' => 'shoes_id']);
    }
}
