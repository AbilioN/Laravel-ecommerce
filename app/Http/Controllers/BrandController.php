<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Repos\BrandRepo;

class BrandController extends Controller
{   
    public function __construct(){
        $this->middleware('auth')->only(['manage']);
    }
    public function manage(Request $req, BrandRepo $brepo){

        $this->authorize('manage' , Brand::class);
        $brepo->insert(['name' => 'accer']); 
    }
}
