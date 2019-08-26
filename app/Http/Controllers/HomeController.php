<?php

namespace App\Http\Controllers;

use App\model1;
use App\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
       $data['activecustomers'] = model1::active()->get();
       $data['inactivecustomres'] = model1::inactive()->get();
       $data['company'] = Company::all();
      //  dd($activeCustomers);
        $data['name'] = model1::all();
          return view('pages.welcome',$data);
         
    }
    function store(Request $request){

      $data = request()->validate([
        'name'=>'required|min:3',
        'roll' =>'required',
        'class'=>'required',
        'active'=>'required',
        'email'=>'required|email',
        
       
      ]);
      $obj = new model1();
      $obj->Name = request('name');
      $obj->Roll = request('roll');
      $obj->Class = request('class');
      $obj->active = request('active');
      $obj->email  = request('email');
      $obj->company_id  = request('active');
      $obj->save();  
        return back();
    }
    function company()
    {
      $data['company_data'] = Company::all();
      return view('pages.company',$data);
    }

    function addcompany(Request $request)
    {
      $request->validate([
        'name' => 'required|min:3|max:10',
        'phone' => 'required'
       
      ]);
      
            $company = new Company();
            $company->name = $request->name;
            $company->phone = $request->phone;
            $company->save();
            return redirect()->back();
        
    }
}
