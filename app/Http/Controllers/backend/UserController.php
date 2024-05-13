<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictService;
use App\Repositories\Interfaces\WardRepositoryInterface as WardService;




class UserController extends Controller
{
    protected $WardRepository;
    protected $DistrictRepository;
    protected $provinceRepository;
    public function __construct(
        WardService $wardRepository,
        ProvinceService $ProvinceRepository,
        DistrictService $DistrictRepository,
    ) {
        $this->WardRepository = $wardRepository;
        $this->provinceRepository = $ProvinceRepository;
        $this->DistrictRepository = $DistrictRepository;
    }
    public function index()
    {
        $users = User::all();
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ]
        ];
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users',
        ));
    }
    public function create()
    {

        $wards = $this->WardRepository->all();
        $provinces = $this->provinceRepository->all();
        $districts = $this->DistrictRepository->all();
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ]
        ];
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact(
            'template',
            'provinces',
            'districts',
            'wards',
        ));
    }
}
