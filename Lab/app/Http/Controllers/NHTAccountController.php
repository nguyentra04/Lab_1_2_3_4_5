<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHTAccountController extends Controller
{
    //action 
    public function index (){
        return "welcome to, NHT controller";
    }
    //create form 
    public function create() {
    return view ('NHT-account-create');
    }
    //action: retuen 
    public function NHTshowdata(){
        $data = array('10900106','nguyen huong tra');
        return view ('NHT-account-showdata',['data'=>$data]);
    }
    //list data to view 
    public function NHTlist(){
        $data = array(["id"=>1,"Username"=>"TraNguyen","password"=>"123456@","fullname"=>"Nguyen Huong Tra"]);
        return view ('NHT-account-list',['data'=>$data]);
    }
    //connect db
    public function NHTconnectdb(){
        $model = db:: table('nht_account')->get();
        return view ('NHT-account-all',['model'=>$model]);}
}