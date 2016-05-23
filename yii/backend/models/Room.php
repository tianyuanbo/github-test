<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $r_id
 * @property string $r_title
 * @property integer $u_id
 * @property string $r_comment
 * @property string $r_info
 * @property string $r_img
 * @property string $r_introduce
 * @property string $r_alias
 * @property string $r_air_conditioner
 * @property string $r_elevator
 * @property string $r_type
 * @property string $r_pattem
 * @property string $r_people
 * @property string $r_price
 * @property string $r_coordinate
 * @property string $r_theme
 * @property string $r_grade
 * @property string $r_collect
 * @property string $r_area
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id'], 'integer'],
            [['r_price'], 'number'],
            [['r_title', 'r_comment', 'r_info', 'r_img', 'r_introduce', 'r_alias', 'r_air_conditioner', 'r_elevator', 'r_type', 'r_pattem', 'r_people', 'r_coordinate', 'r_theme', 'r_grade', 'r_collect', 'r_area'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'r_title' => 'R Title',
            'u_id' => 'U ID',
            'r_comment' => 'R Comment',
            'r_info' => 'R Info',
            'r_img' => 'R Img',
            'r_introduce' => 'R Introduce',
            'r_alias' => 'R Alias',
            'r_air_conditioner' => 'R Air Conditioner',
            'r_elevator' => 'R Elevator',
            'r_type' => 'R Type',
            'r_pattem' => 'R Pattem',
            'r_people' => 'R People',
            'r_price' => 'R Price',
            'r_coordinate' => 'R Coordinate',
            'r_theme' => 'R Theme',
            'r_grade' => 'R Grade',
            'r_collect' => 'R Collect',
            'r_area' => 'R Area',
        ];
    }
}
