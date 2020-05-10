<?php
namespace App\Repos;
use App\Repos\Repository;
use App\Models\Brand;
use App\Components\DataFilters\BrandFilter;

class BrandRepo extends Repository {

    public function __construct(Brand $model, BrandFilter $filter ){
        parent::__construct($model , $filter);
    }
}

?>