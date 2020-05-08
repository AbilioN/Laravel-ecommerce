<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{   
    public function __construct(){
        $this->middleware('auth')->only(['manage']);
    }
    public function manage(){
        $this->authorize('manage' , Brand::class);
    }
}
