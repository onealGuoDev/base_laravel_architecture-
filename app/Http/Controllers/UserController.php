<?php

namespace App\Http\Controllers;

use App\Http\Lib\Paginate;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Services\MemberService;
use App\Http\Response\ResponseService;


class UserController extends Controller
{
    public function getOne(Request $request)
    {

        $result = UserService::getOne([
            'userInfo' => $request['user'],
        ]);

        return ResponseService::outputForController($result);
    }

    public function postOne(Request $request)
    {

        $result = UserService::postOne([
            'userInfo' => $request['user'],
        ]);

        return ResponseService::outputForController($result);
    }

    public function putOne(Request $request)
    {

        $result = UserService::postOne([
            'userInfo' => $request['user'],
        ]);

        return ResponseService::outputForController($result);
    }

    public function deleteOne(Request $request)
    {

        $result = UserService::deleteOne([
            'userInfo' => $request['user'],
        ]);

        return ResponseService::outputForController($result);
    }

}
