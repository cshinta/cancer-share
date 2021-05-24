<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    public function showReport($postID, Request $request)
    {
        $request->session()->put('postID', $postID);

        return view('forum.report');
    }

    public function createReport(Request $request)
    {
        try {
            $request->validate([
                'content' => 'nullable|string',
                'type' => 'required|not_in:0'
            ]);

            if ($request->content == null) {
                $content = "null";
            } else {
                $content = $request->content;
            }

            $report = new Report;
            $report->postID = $request->session()->get('postID');
            $report->content = $content;
            $report->id = Auth::user()->id;
            $report->type = $request->type;
            $report->save();

            $request->session()->forget('postID');

            Alert::success('Laporan Berhasil Direkam!', 'Terima kasih atas laporan Anda. Kami akan segera menindaklanjuti terkait hal ini.');
        } catch (\Exception $e) {
            Alert::warning("Terjadi Kesalahan pada Sistem", 'Mohon mencoba lagi dalam beberapa menit.');
            return (redirect(url('/forum')));
        }
        return redirect(url('/forum'));
    }
}
