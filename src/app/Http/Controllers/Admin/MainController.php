<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;
class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
