<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerFrontController extends Controller
{

    public function show()
    {
        $managers = Manager::all();
        return view('manager.index', compact('managers'));
    }
}
