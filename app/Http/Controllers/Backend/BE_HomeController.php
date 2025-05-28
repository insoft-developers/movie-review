<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Models\HowToDownload;
use App\Models\ReportLink;
use App\Models\ReportMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BE_HomeController extends Controller
{
    public function index()
    {
        $view = 'home';
        return view('backend.home', compact('view'));
    }

    public function how_to_download()
    {
        $view = 'how-to';
        $data = HowToDownload::find(1);
        return view('backend.how_to', compact('view', 'data'));
    }

    public function update_how(Request $request)
    {
        HowToDownload::where('id', 1)->update([
            'download_info' => $request->download_info,
        ]);

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function footer()
    {
        $view = 'footer-menu';
        $data = Footer::find(1);
        return view('backend.footer', compact('view', 'data'));
    }

    public function footer_update(Request $request)
    {
        Footer::where('id', 1)->update([
            'request_us' => $request->request_us,
            'dmca' => $request->dmca,
            'contact_us' => $request->contact_us,
            'about_us' => $request->about_us,
            'site_disclaimer' => $request->site_disclaimer,
        ]);

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function report_dead_link()
    {
        $view = 'report-dead-link';
        $data = ReportLink::find(1);
        $comments = ReportMessage::where('level', 1)->orderBy('id', 'desc')->paginate(5);
        return view('backend.report_link', compact('view', 'data', 'comments'));
    }

    public function dead_link_update(Request $request)
    {
        ReportLink::where('id', 1)->update([
            'report_dead_link' => $request->report_dead_link,
        ]);

        return redirect()->back()->with('success', 'Data updated successfully!');
    }

    public function admin_reply(Request $request)
    {
        $input = $request->all();

        ReportMessage::create([
            'comment' => $input['comment'],
            'name' => Auth::guard('admin')->user()->name . ' (Admin)',
            'email' => Auth::guard('admin')->user()->email,
            'level' => 2,
            'sub_level' => $input['id'],
        ]);

        return response()->json(true);
    }

    public function comment_delete(Request $request)
    {
        $input = $request->all();

        ReportMessage::destroy($input['id']);

        return response()->json(true);
    }

    public function comment_search(Request $request)
    {
         $view = 'report-dead-link';
        $query = $request->input('search'); // Ambil input pencarian

        $comments = ReportMessage::when($query, function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%")->orWhere('email', 'like', "%{$query}%");
        })->paginate(5);

        // Tambahkan parameter pencarian ke pagination links
        $comments->appends(['search' => $query]);

        $data = ReportLink::find(1);
       
        return view('backend.report_link', compact('view', 'data', 'comments'));
    }
}
