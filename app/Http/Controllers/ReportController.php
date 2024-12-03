<?php

namespace App\Http\Controllers;

use App\Models\Report as ModelsReport;
use App\Models\Statuse;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(){
        $reports = ModelsReport::where('user_id',Auth::user()->id)->get();
        $statuses = Statuse::all();
        return view('report.index', compact('reports', 'statuses'));
    }

    public function destroy(ModelsReport $report){
        $report -> delete();

        $reports = ModelsReport::where('user_id',Auth::user()->id)->get();
        $statuses = Statuse::all();
        return view('report.index', compact('reports', 'statuses'));
    }

    public function store(HttpRequest $request, ModelsReport $report){
        $data = $request -> validate([
          'number'=>'string',
          'description'=>'string',
          "user_id"=>"",
          "statuse_id"=>"",
        ]);
        $report->create($data);
        
        $reports = ModelsReport::where('user_id',Auth::user()->id)->get();
        $statuses = Statuse::all();
        return view('report.index', compact('reports', 'statuses'));
      }

      public function show( ModelsReport $report){
        $statuses = Statuse::all();
        return view('report.show', compact('report','statuses'));
      }

      public function update(HttpRequest $request, ModelsReport $report){
        $data = $request -> validate([
          'number'=>'string',
          'description'=>'string',
          "statuse_id"=>"",
        ]);
        $report->update($data);
        if(Auth::user()->role == 'admin')
        {
          $reports = ModelsReport::all();
          $statuses = Statuse::all();
          $userId = Auth::id();
          return view('admin.index', compact('reports', "userId" , 'statuses'));
        }
        else
        {
          $reports = ModelsReport::where('user_id',Auth::user()->id)->get();
          $statuses = Statuse::all();
          return view('report.index', compact('reports', 'statuses'));
        }
      }
}
