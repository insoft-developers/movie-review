<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'setting';
        return view('backend.setting', compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Setting::find(1);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $setting = Setting::find($id);

        $rules = [
            'app_name' => 'required',
            'app_email' => 'required',
            'app_title' => 'required',
            'app_phone' => 'required',
            'app_address' => 'required',
            'app_contact_name' => 'required',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            $pesan = $validator->errors();
            $pesanarr = explode(',', $pesan);
            $find = ['[', ']', '{', '}'];
            $html = '';
            foreach ($pesanarr as $p) {
                $html .= str_replace($find, '', $p) . '<br>';
            }
            return response()->json([
                'success' => false,
                'message' => $html,
            ]);
        }

        $input['app_icon'] = $setting->app_icon;
        $unique = uniqid();
        if ($request->hasFile('app_icon')) {
            $input['app_icon'] = str::slug($unique, '-') . '.' . $request->app_icon->getClientOriginalExtension();
            $request->app_icon->move(public_path('/template/setting'), $input['app_icon']);
        }

        $setting->update($input);
        return response()->json([
            'success' => true,
            'message' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Admin::destroy($id);
    }

    public function setting_table()
    {
        $data = Setting::all();

        return DataTables::of($data)
            ->addColumn('app_icon', fn($data)=> $data->app_icon == null ? '' : '<img src="'.asset('template/setting/'.$data->app_icon).'">')
            ->addColumn('action', function ($data) {
                return '
                <a title="Edit Data" onclick="editData(' .
                    $data->id .
                    ')" href="javascript:void(0)" class="btn btn-insoft btn-warning">
                  <i class="icofont-edit icon-insoft"></i>
                </a>';
            })
            ->rawColumns(['action','app_icon'])
            ->addIndexColumn()
            ->make(true);
    }
}
