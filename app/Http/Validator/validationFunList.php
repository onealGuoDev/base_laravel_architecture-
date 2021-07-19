<?php


namespace App\Http\Validator;


class validationFunList
{

    public static function userGetOne($request)
    {

        $params = [
            'user_id' => $request->user_id,
        ];

        return $result = ValidatorMake::make($params, [
            'user_id' => 'string',
        ]);
    }

    public static function userPostOne($request)
    {

        $params = [
            'user_id' => $request->user_id,
        ];

        return $result = ValidatorMake::make($params, [
            'user_id' => 'string',
        ]);
    }

    public static function userPutOne($request)
    {

        $params = [
            'user_id' => $request->user_id,
        ];

        return $result = ValidatorMake::make($params, [
            'user_id' => 'string',
        ]);
    }

    public static function userDeleteOne($request)
    {

        $params = [
            'user_id' => $request->user_id,
        ];

        return $result = ValidatorMake::make($params, [
            'user_id' => 'string',
        ]);
    }

}
