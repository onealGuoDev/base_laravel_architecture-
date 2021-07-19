<?php


namespace App\Http\Response;


class ResponseService
{

    public static function errorHandler (array $errorCode, $data = []){

        if (count($data) == 0)
        {
            return ['errorKey' => $errorCode['errorKey'], 'errorMessage' => $errorCode['errorMessage']];
        }
        else
        {
            return ['errorKey' => $errorCode['errorKey'], 'errorMessage' => $errorCode['errorMessage'], 'data' => $data];
        }
    }

    public static function successHandler ($data):array{
        if ($data === null)
        {
            return ['status' => 'success'];
        }
        else
        {
            return $data;
        }
    }

    public static function outputForController($result)
    {
        $headers = array(
            'Content-Type' => 'application/json; charset=utf-8'
        );
        if (isset($result['errorKey']))
            return response()->json(self::responseError($result),400,$headers);
        else {
            return response()->json(self::responseSuccess($result),200,$headers);
        }

    }

    public static function responseSuccess ($result):array{


        if ($result === null) {
            return
                ['status' => 'success',
                    'content'=>[]
                ];
        }
        else {
            return
                ['status' => 'success',
                    'data'=>$result['data']
                ];
        }
    }

    protected static function responseError ($result):array{

        return
            ['status' => 'error',
                'data'=>[
                    'title'=>$result['errorKey'],
                    'message'=>$result['errorMessage']
                    ]
            ];
    }

}
