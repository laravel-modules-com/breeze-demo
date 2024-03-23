<?php

namespace Modules\Base\Http\Controllers;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('base::dashboard');
    }
}
