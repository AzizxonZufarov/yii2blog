<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.02.2022
 * Time: 10:11
 */

namespace app\models;


use yii\db\ActiveRecord;

class Friends extends ActiveRecord
{

    public static function tableName()
    {
        return "friends";
    }

}