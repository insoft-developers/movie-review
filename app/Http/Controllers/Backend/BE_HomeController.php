<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HowToDownload;
use Illuminate\Http\Request;

class BE_HomeController extends Controller
{
    public function index() {
        $view = 'home';
        return view('backend.home', compact('view'));
    }

    public function how_to_download() {
        $view = 'how-to';
        $data = HowToDownload::find(1);
        return view('backend.how_to', compact('view','data'));
    }

    public function update_how(Request $request) {
        HowToDownload::where('id', 1)->update([
            "download_info" => $request->download_info
        ]);

        return redirect()->back()->with('success', 'Data updated successfully!');
        
    }
}
