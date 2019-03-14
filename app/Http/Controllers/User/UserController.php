<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;


class UserController
{
    //用户登录
    public function login(Request $request){
        //echo 2;exit;
        $user_name=$request->input("u");
        $pwd=$request->input("p");
        var_dump($user_name);
        var_dump($pwd);
        //验证用户信息
        if(1){
            $uid=1000;
            $str=time()+$uid+mt_rand(1000,9999);
            $token=substr(md5($str),10,20);
            //var_dump($token);
            //保存token到redis
            $key="api:h:u".$uid;
            Redis::hSet($key,'token',$token);
            echo $token;
        }else{
            echo "登录失败";
        }
    }
    //用户中心
}
