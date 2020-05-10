<?php
namespace App\Components\DataFilters;

use App\Components\DataFilters\DataFilter;


class BrandFilter extends DataFilter{

    protected $sortingMethods = [
        'newest' => 'sort_by_newest'
    ];
    
    public function q($key , $value){
        $this->builder->where('name' , 'like' , '%'.$value.'%');
        
    }

    public function sort_by_newest(){
        $this->builder->orderBy('created_at' , 'desc');
    }

    public function defaultMethod($key, $value){

    }
}

?>