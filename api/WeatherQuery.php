<?php
namespace api;
use libs\HttpRequest;
class WeatherQuery{
     const API_URL = 'http://apis.baidu.com/apistore/weatherservice/recentweathers';
     public static function query( $cityName ){
                        var_dump( $cityName );
                   }
     public static function test( $cityName ){
                        $url = "http://www.baidu.com/ddd";
                        $result = HttpRequest::request( self::API_URL,[ 'cityname'=>$cityName ] );
                        echo "<pre>";
                        var_dump( $result );
                   }
}