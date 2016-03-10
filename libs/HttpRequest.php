<?php
namespace libs;
class HttpRequest{
     public static function request( $url,$params = [  ],$method = 'GET' ){
                        $ret = null;
                        if( preg_match( '/^(http|https)\:\/\/(\w+\.\w+\.\w+)/',$url ) ){
                             $method = strtoupper( $method );
                             if( $method =='POST' ){
                                  exit('nothing to do.');
                             } elseif ($method == 'PUT') {
                                  exit('nothing to do.');
                             } elseif ($method == 'DELETE') {
                                  exit('nothing to do.');
                             }else{
                                  if( $params ){
                                       if( strrpos( '?',$url ) ){
                                            $url = $url . '&'. http_build_query( $params );
                                       }else{
                                            $url = $url . '?'. http_build_query( $params );
                                       }
                                  }
                                  $ch = curl_init();
                                  $header = array(
                                       'apikey:309086a9b1afc6f66c8c7a2e703ee0b9',
                                       );
                                  // 添加apikey到header
                                  curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
                                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                  // 执行HTTP请求
                                  curl_setopt($ch , CURLOPT_URL , $url);
                                  $res = curl_exec($ch);
                                  $ret = json_decode($res);
                             }
                        }
                        return $ret;
                   }
}