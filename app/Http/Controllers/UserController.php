<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerController extends Controller
{
    public function index()
    {
        return "หน้า user";
    }

    public function create()
    {
        return "สร้าง user";
    }

    public function shoowName($name)
    {
        return "สร้าง $name ";

    }

    public function  showNameAndAge($name,$age)
    {
        return "สร้าง $name อายุ $age ";
    }
}
