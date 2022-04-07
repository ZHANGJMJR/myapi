<?php
// 应用公共文件
/**
 * 公共响应成功方法
 */ 
use think\Response;
 function returnJson($data,$msg='success',$code=200,$type='json'){
    $result=[
        'code'=>$code ,
        'msg'=> $msg,
        'data'=>$data
    ];
    return Response::create($result,$type);
}