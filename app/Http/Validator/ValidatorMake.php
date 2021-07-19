<?php


namespace App\Http\Validator;

use App\Http\Constant\ValidConstant;
use App\Http\Response\ResponseService;
use Illuminate\Support\Facades\Validator;


class ValidatorMake
{

    public static function make(array $params, array $rules): array
    {
        $returnMessage = null;

        $validator = Validator::make($params, $rules);

        if ($validator->fails())
        {
            $errors = $validator->errors();

            $returnMessage = $errors->messages();

            return ResponseService::errorHandler(ValidConstant::getKey("VALID_ERROR", $returnMessage));
        }

        return ResponseService::successHandler(null);

    }
}
