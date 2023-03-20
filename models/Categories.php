<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.02.2022
 * Time: 10:11
 */

namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{

    public static function tableName()
    {
        return "categories";
    }

}