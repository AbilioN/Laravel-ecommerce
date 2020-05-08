<?php
namespace App\Repos;
use App\Repos\Repository;
use App\Models\Brand;


class BrandRepo extends Repository {

    public function __construct(Brand $model){
        parent::__construct($model);
    }
}

?>