<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Statuse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $reports = Report::all();
        $statuses = Statuse::all();
        $userId = Auth::id();
        return view('admin.index', compact('reports', "userId" , 'statuses'));
    }
}
