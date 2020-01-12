<?php

namespace app\console\models;

use app\framework\core\ActiveRecord;

class Migration extends ActiveRecord
{
    public static function findByName($name)
    {
        return self::query()->select()->where(['name' => $name]);
    }
}