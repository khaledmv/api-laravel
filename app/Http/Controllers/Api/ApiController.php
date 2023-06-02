<?php

namespace App\Http\Controllers\Api;

use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    // Create api

    public function createEmploye(Request $request){
        // validate

        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:employes,email",
            "phone_no" => "required",
            "gender" => "required",
            "age" => "required",
        ]);

        // svae into employe databaase

        $employe = new Employe();

        $employe->name = $request->name;
        $employe->email = $request->email;
        $employe->phone_no = $request->phone_no;
        $employe->gender = $request->gender;
        $employe->age = $request->age;

        $employe->save();

        // return response 

        return response()->json([
            "status" => 1,
            "message" => "Employe created succesfully"
        ]);



    }


    // List api 

    public function listEmploye(){

       $employes = Employe::get();

       return response()->json([
        "status" => 1,
        "message" => "Listing Employe",
        "data" => $employes
       ], 200);

    }


    // Get single employe data 

    public function getSingleEmpolye(){

    }


    // update empolyee data

    public function updataEmploye(){

    }

    // delete employee data 

    public function deleteEmploye(){

    }


    

}
