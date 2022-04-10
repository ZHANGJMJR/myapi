<?php
namespace app\response;
trait ResponseJson
{
    /**
     * 返回一个json格式
     *
     * @param $code
     * @param $message
     * @param $data
     * @return string
     */
    private function jsonResponse($code,$message,$data)
    {
        $content = [
            'code' => $code,
            'msg'  => $message,
            'data' => $data
        ];
        return json_encode($content);
    }
 
    /**
     * 接口成功时返回
     * @param array $data
     * @return string
     */
    private function jsonSuccessData($data=[])
    {
        return $this->jsonResponse(0,'Success',$data);
    }
 
    /**
     * 业务逻辑错误是返回
     * @param $code
     * @param $message
     * @param $data
     * @return string
     */
    private function jsonData($code,$message,$data=[])
    {
        return $this->jsonResponse($code,$message,$data);
    }
 
}