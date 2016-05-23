<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $u_img
 * @property string $u_phone
 * @property string $u_aut
 * @property string $u_type
 * @property string $u_time
 * @property string $u_real_name
 * @property string $u_card
 * @property string $u_email
 * @property string $u_evaluate
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_time'], 'safe'],
            [['u_name', 'u_pwd', 'u_img', 'u_phone', 'u_aut', 'u_type', 'u_real_name', 'u_card', 'u_email', 'u_evaluate'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'u_img' => 'U Img',
            'u_phone' => 'U Phone',
            'u_aut' => 'U Aut',
            'u_type' => 'U Type',
            'u_time' => 'U Time',
            'u_real_name' => 'U Real Name',
            'u_card' => 'U Card',
            'u_email' => 'U Email',
            'u_evaluate' => 'U Evaluate',
        ];
    }
}
