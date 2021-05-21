<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    public function showReport($postID, Request $request){
        $request->session()->put('postID', $postID);

        return view('forum.report');
    }
    
    public function createReport(Request $request){
        $request->validate([
            'content' => 'nullable|string',
            'type' => 'required'
        ]);
        
        $report = new Report;
        $report->postID = $request->session()->get('postID');
        $report->content = $request->content;
        $report->id = Auth::user()->id;
        $report->type = $request->type;
        $report->save();

        $request->session()->forget('postID');

        return redirect(url('/forum'))->with('success', "Post Created");
    }
}
