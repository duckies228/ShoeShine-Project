<?php
namespace App\Repositories;
use App\Repositories\Interfaces\WardRepositoryInterface;
use App\Models\Ward;
class WardRepository implements WardRepositoryInterface{

    public function all(){
        return Ward::all();
    }
};
