<?php
/**
 * SHAREit Utils
 */

/**
 * curl post util
 *
 * @param string $url
 * @param array $post_data
 * @return bool|mixed
 */
function request_post($url = '', $post_data = array())
{
    if (empty($url) || empty($post_data)) {
        return "param is empty";
    }
    $postUrl = $url;
    $curlPost = $post_data;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL, $postUrl);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Content-Length: ' . strlen($curlPost)
    ));
    //要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //post提交方式
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    //运行curl
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

/**
 * Get sign Utils
 *
 * @param string $key merchant secret key
 * @param array $post_data
 * @return sign
 */
function signForMd5($key, $param)
{
    $preStr = createLinkString($param) . '&key=' . $key;
    //输出签名加签后字符串并转大写
    return strtoupper(md5($preStr));
}

/**
 * verify sign Utils
 *
 * @param string $key
 * @param array $param
 * @param string $sign
 * @return bool
 */
function verifyForMd5($key, $param, $sign)
{
    $newSign = signForMd5($key, $param, $sign);
    return $newSign === $sign;
}

function createLinkString($param)
{
    $arg = "";
    //数组排序
    ksort($param);
    reset($param);
    while (list ($key, $val) = each($param)) {
        if($key == "sign") continue;
        if(!empty($key)){
            $arg .= $key . "=";
        }
        if (is_array($val)) {
            $arg .= createLinkString($val) . "&";
        } else {
            $arg .= $val . "&";
        }
    }
    //去掉最后一个&字符
    $arg = substr($arg, 0, count($arg) - 2);
    return $arg;
}

?>
