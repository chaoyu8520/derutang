<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Ceshi extends ActiveRecord
{
    const TABLE_NAME = 'ceshi';

    public static function tableName()
    {
        return static::TABLE_NAME;
    }
    public static function getDb()
    {
        return Yii::$app->db;
    }
}