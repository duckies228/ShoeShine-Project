<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Models\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictRepository implements DistrictRepositoryInterface{

    public function all(){
        return District::all();
    }
};
