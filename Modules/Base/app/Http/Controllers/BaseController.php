<?php

namespace Modules\Base\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class BaseController extends Controller
{
    public function index(): View
    {
        return view('base::dashboard');
    }
}
