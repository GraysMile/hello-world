<?php
namespace App\Registry;
class RequestRegistry extends Registry
{
    private $value=[];
    private static $instance;
    private function __construct()
    {
    }
    //单例模式
    static function instance(){
        if(!isset(self::$instance)) {self::$instance=new self();}
        return self::$instance;
    }
    protected function get($key)
    {
        if(isset($this->value[$key])){
            return $this->value[$key];
        }
        return null;
    }

    protected function set($key, $val)
    {
        $this->value[$key]=$val;
    }
    static function getRequest()
    {
        return self::instance()->get('request');
    }
    static function setRequest($request)
    {
       self::instance()->set('request',$request);
    }
}
