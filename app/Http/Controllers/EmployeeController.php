<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index($id){
        return "Welcome the Employee Page".$id;
    }
}
