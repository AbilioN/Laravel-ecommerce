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
        $df = $brepo->search();
        $data = $df->getData();
        // dd($data);
        $view_data['data'] = $data;

        if($req->ajax()){
            $view = view('brand.manage-list')->with($view_data)->render();
            return json(['view' => $view]);
        }
        return view('brand.manage' , $view_data);
    }
    public function delete(Request $req, BrandRepo $brepo){
       $result = $brepo->deleteByAttributes(['id' => $req->id]);
       if($result){
           return json(['result' => true]);
       }else{
           return json(['result' => false]);
       }
    }

    public function deleteAll(Request $req , BrandRepo $brepo){
        $affected_rows = $brepo->deleteMany($req->ids);
        if($affected_rows){
            return json(['result' => true]);
        }else{
            return json(['result' => false]);

        }
    }
}
