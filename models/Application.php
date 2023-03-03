<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property int $user_id
 * @property int $app_id
 * @property int $created_at
 * @property int|null $updated_at
 * @property int $region_id
 * @property string $item_name
 * @property string $app_desc
 * @property string $current_residence
 * @property int $count
 * @property int $app_status
 * @property int $client_price
 * @property int|null $expert_price
 * @property string $front_img
 * @property string $top_img
 * @property string $sign_img
 * @property int $created_date
 * @property string $technique
 * @property string $size
 * @property string $mass_media_source
 * @property int $executor_id
 * @property string $author
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'app_id', 'created_at', 'region_id', 'item_name', 'app_desc', 'current_residence', 'count', 'app_status', 'client_price', 'front_img', 'top_img', 'sign_img', 'created_date', 'technique', 'size', 'mass_media_source', 'executor_id', 'author'], 'required'],
            [['user_id', 'app_id', 'created_at', 'updated_at', 'region_id', 'count', 'app_status', 'client_price', 'expert_price', 'created_date', 'executor_id'], 'integer'],
            [['item_name', 'app_desc', 'current_residence', 'technique', 'mass_media_source'], 'string'],
            [['front_img', 'top_img', 'sign_img', 'size', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'app_id' => 'App ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'region_id' => 'Region ID',
            'item_name' => 'Item Name',
            'app_desc' => 'App Desc',
            'current_residence' => 'Current Residence',
            'count' => 'Count',
            'app_status' => 'App Status',
            'client_price' => 'Client Price',
            'expert_price' => 'Expert Price',
            'front_img' => 'Front Img',
            'top_img' => 'Top Img',
            'sign_img' => 'Sign Img',
            'created_date' => 'Created Date',
            'technique' => 'Technique',
            'size' => 'Size',
            'mass_media_source' => 'Mass Media Source',
            'executor_id' => 'Executor ID',
            'author' => 'Author',
        ];
    }
}
