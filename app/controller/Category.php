<?php
declare (strict_types = 1);

namespace app\controller;
use think\facade\Request as FacadeRequest;
use think\Request;
use app\model\Category as CategoryModel;
class Category
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    { 
             // field(['id','username','realname','phone'])->
            $cate = CategoryModel::where('status',0)->select();
            
            if (!$cate->isEmpty() ) { 
                return  returnJson($cate,'验证成功！');
            }else{
                return returnJson([],'无分类信息！',400);
            }
        
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $params = $request->param();
       // echo($params);
        $name = $params['categoryname'];
        $pic = $params['categorypic'];
        //dump($name);
        if(strlen($name)>0){
            CategoryModel::create([
                'categoryname'=>$name,'categorypic'=>$pic])->save();
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
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
        $category = $request->param();  
        if($category!=null ){            
            $temp = CategoryModel::where('categoryname','=',
                                        $category['categoryname'])->count();
            if($temp!=null&& $temp>0){
                return returnJson([],'存在该分类信息，不得重复！',400);
            }else{
               $r =  CategoryModel::update($category)->getData('id');
               return returnJson([ $r ],'修改成功！',200);
            }
            
        }
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
