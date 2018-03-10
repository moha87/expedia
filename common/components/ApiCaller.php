<?php
namespace app\common\components;

use Yii;
class ApiCaller {

    //=deal-finder&page=foo&uid=foo&productType=Hotel
    public function ApiCallerGet($page = 'foo',$uid = 'foo',$productType = 'Hotel'){
        //extract data from the post
        $url = Yii::$app->params['api_url']."&page=$page&uid=$uid&productType=$productType";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $result = trim(curl_exec($ch));

        if($result === false)
        {
            $result = "Error Number:".curl_errno($ch)."\n";
            $result .= "Error String:".curl_error($ch);
        }
        curl_close($ch);  // Seems
        return $result;
    }
}