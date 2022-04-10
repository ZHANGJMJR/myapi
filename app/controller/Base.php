<?php
namespace app\controller;
use think\Response;

abstract class Base {
    protected function ret($data,$msg='success',$code=200,$type='json'){
        $result=[
            'code'=>$code ,
            'msg'=> $msg,
            'data'=>$data
        ];
        return Response::create($result,$type);
    }
}