<?php

declare(strict_types=1);

namespace app\controller;

use think\Request;
use app\model\User as UserModel;
use app\validate\User as ValidateUser;
use think\exception\ValidateException;
use think\facade\Db;
use think\facade\Request as FacadeRequest;
use think\facade\Validate; 

class User 
{
    public function login()
    {
       // user return response()->json($data, 200, $headers);
        $params = FacadeRequest::param();
        $username = $params['username'];
        $password = $params['password'];
        if (isset($username) && isset($password)) {
             // field(['id','username','realname','phone'])->
            $u = UserModel::where('username', $username)->where('password', md5($password))->find();
            if ($u != null) {  
                return  returnJson($u,'验证成功！');
            }else{
                return returnJson([],'无效用户信息！',400);
            }
        }
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        return returnJson(UserModel::select());
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        if (isset($id) && is_numeric($id)) {
            //return json(UserModel::find($id));
            return  returnJson(UserModel::find($id));
        }
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
