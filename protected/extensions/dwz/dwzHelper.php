<?php
/**
 *
 */
class DwzHelper
{
      
    
    /**
     * 这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string $forwardUrl
     */
    public static  function success($message, $rel = '',$callbackType='closeCurrent',$forwardUrl='')
    {
        $statusCode = '200';
        $navTabId = '';
       // $rel = '';
       // $callbackType = 'closeCurrent';
        $forwardUrl = '';
        $appEnd = true;

        if(!empty($rel)){
            $navTabId = $rel ;
        }

        $dwzResponse = self::ajaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
        echo $dwzResponse;
        if ($appEnd) {
            Yii::app()->end();
        }
    }


    /**
     *  这个是给dwz界面用的用于返回相应的消息代码
     * @param $message
     * @param string $forwardUrl
     */
    public static   function error($message, $forwardUrl = '')
    {
        if ($message instanceof CModel) {
            if ($message->hasErrors()) {
                $message = preg_replace("/[\n\r]/", '', CHtml::errorSummary($message));
            } else
                $message = '';
        }
        $statusCode = '300';
        $navTabId = '';
        $rel = '';
        $callbackType = 'closeCurrent';
        $appEnd = true;

        $dwzResponse = self::ajaxFormResponse($statusCode, $message, $navTabId, $rel, $callbackType, $forwardUrl);
        echo $dwzResponse;
        if ($appEnd) {
            Yii::app()->end();
        }
    }

    /**
     * @param string $statusCode
     * @param string $message
     * @param string $navTabId
     * @param string $rel
     * @param string $callbackType
     * @param string $forwardUrl
     * @return string
     */
    protected static  function ajaxFormResponse($statusCode = '', $message = '', $navTabId = '', $rel = '', $callbackType = 'closeCurrent', $forwardUrl = '')
    {
        $response = array(
            'statusCode' => $statusCode,
            'message' => $message,
            'navTabId' => $navTabId,
            'rel' => $rel,
            'callbackType' => $callbackType,
            'forwardUrl' => $forwardUrl,
        );
        return CJSON::encode($response);
    }
}