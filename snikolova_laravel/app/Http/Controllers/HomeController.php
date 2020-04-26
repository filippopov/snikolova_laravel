<?php

namespace App\Http\Controllers;

use App\Exceptions\ApplicationException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        throw new ApplicationException('Something when wrong!');
    }
}
