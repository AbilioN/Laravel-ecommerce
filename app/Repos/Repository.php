<?php

namespace App\Repos;

use Illuminate\Database\Eloquent\Model;

class Repository{

    protected $model;
    protected $relations = [];

    // all functions here will be shared by all repository classes

    public function __construct(Model $model){
        $this->model = $model;
    }

    public function insert(array $data){

        if(is_assoc($data)){
            return $this->model->create($data);
        }else{
            return $this->model->insert($data);
        }
    }

    public function relations(array $relations){
        $this->relations  = $relations;
        return $this;
    }
    public function search(array $criteria = []){
        $this->filter->setBuilder($this->model->with($this->relations));
        $this->filter->setCriteria($criteria);
        $this->filter->buildQuery();
        return $this->filter;
    }
}

?>