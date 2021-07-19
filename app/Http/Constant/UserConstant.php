<?php


namespace App\Http\Constant;


class UserConstant
{
    public static function getKey($findKey)
    {
        if (isset(self::$message[$findKey]))
        {
            return self::$message[$findKey];
        }
        else
        {
            throw new \Exception('找不到您要的參數名稱');
        }
    }

    public static $message = [
        'USER_EXISTS' => '使用者已經存在',
        'POST_USER_ERROR' => '新增使用者失敗',
        'PUT_USER_ERROR' => '更新使用者失敗',
        'DELETE_USER_ERROR' => '刪除使用者失敗',
    ];
}
