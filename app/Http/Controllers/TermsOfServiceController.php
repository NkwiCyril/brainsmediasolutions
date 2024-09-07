<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TermsOfServiceController extends Controller
{
    public function index(): View 
    {
        return view("terms-of-service.index");
    }
}
