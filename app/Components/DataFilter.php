<?php

namespace App\Components\DataFilters;

use Illuminate\Database\Eloquent\Builder;


abstract class DataFilter{
    protected $builder;
    protected $nutral_params = [
        'q'
    ];

    protected $per_page;
    protected $default_per_page = 10;
    protected $max_per_page = 30;
    protected $sortingMethods = [

    ];
    public function setBuilder(Builder $builder){
        $this->builder = $builder;
    }

    public function buildQuery(){
        foreach(app('request')->query() as $key=>$value){
            if(!empty($value)){
                if(method_exists($this , $key)){
                    call_user_func_array([$this, $key] , [$key, $value]);
                }else if(!isset($this->nutral_params[$key])){
                    call_user_func_array([$this, 'defaultMethod'] , [$key , $value]);
                }
            }
        }
    }

    public function getData(){
        $this->per_page('per_page' , $this->default_per_page);
        $paginator=$this->builder->paginate($this->per_page);
        $paginator->appends(app('request')->query());
        return $paginator;
    }

    public function setCriteria(array $criteria = []){
        foreach($criteria as $key=>$value){
            if(method_exists($this , $key)){
                call_user_func_array([$this, $key] , [$key , $value]); 
            }
        }
    }

    public function per_page($key, $value){
        if(!empty($this->$key)){
            $this->$key=$value<=$this->max_per_page?$value:$this->max_per_page;
        }
    }

    public function sort($key,$value){
        if(isset($this->sortingMethods[$key])){
            $method=$this->sortingMethods[$key];
            call_user_func_array([$this,$method] , [$key,$value]);
        }
    }
    public abstract function defaultMethod($key , $value);
}

?>