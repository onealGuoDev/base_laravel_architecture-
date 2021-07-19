<?php


namespace App\Http\Services;

use App\Http\Constant\UserConstant;
use App\Http\Repositories\UserRepo;
use App\Http\Response\ResponseService;
use Illuminate\Support\Facades\DB;



class UserService
{

    public static function getOne($params)
    {

        $result = UserRepo::getOne();
        return ResponseService::successHandler(['data' => ["data"=>$result]]);

    }

    public static function postOne($params)
    {

        try {
            DB::beginTransaction();
            $result = UserRepo::postOne();
            DB::commit();
            return ResponseService::successHandler(['data' => $result]);
        } catch (\Exception $err) {
            DB::rollBack();
            return self::returnError('POST_USER_ERROR');
        }
    }

    public static function UpdateOne($params)
    {

        try {
            DB::beginTransaction();
            $result = UserRepo::putOne();
            DB::commit();
            return ResponseService::successHandler(['data' => $result]);
        } catch (\Exception $err) {
            DB::rollBack();
            return self::returnError('PUT_USER_ERROR');
        }

    }

    public static function deleteOne($params)
    {

        try {
            DB::beginTransaction();
            $result = UserRepo::deleteOne();
            DB::commit();
            return ResponseService::successHandler(['data' => $result]);
        } catch (\Exception $err) {
            DB::rollBack();
            return self::returnError('DELETE_USER_ERROR');
        }

    }

    private static function returnError($errorKey)
    {
        return ResponseService::errorHandler(['errorKey' => $errorKey, 'errorMessage' => UserConstant::getKey($errorKey)]);
    }
}
