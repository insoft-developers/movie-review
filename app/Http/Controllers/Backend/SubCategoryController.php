<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'subcategory';
        $category = Category::all();
        return view('backend.subcategory', compact('view','category'));
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
    public function store(Request $request)
    {
        $input = $request->all();

        $slug = strtolower($input['subcategory_name']);
        $input['slug'] = str_replace(" ","-",$slug);

        $rules = [
            "subcategory_name" => "required",
            "category_slug" => "required",
            "slug" => "required|unique:sub_categories"
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

        SubCategory::create($input);
        return response()->json([
            "success" => true,
            "message" => "success"
        ]);

    }

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
        $data = SubCategory::findorFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $slug = strtolower($input['subcategory_name']);
        $input['slug'] = str_replace(" ","-",$slug);

        $rules = [
            "subcategory_name" => "required",
            "category_slug" => "required",
            "slug" => "required|".Rule::unique('sub_categories')->ignore($id),
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

        $category = SubCategory::findorFail($id);
        $category->update($input);
        return response()->json([
            "success" => true,
            "message" => "success"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return SubCategory::destroy($id);
    }

    public function subcategory_table()
    {
        $data = SubCategory::all();

        return DataTables::of($data)
            ->addColumn('category_slug', function($data){
                return $data->category->category_name;
            })
            ->addColumn('action', function ($data) {
                return '
                <a title="Edit Data" onclick="editData(' .
                    $data->id .
                    ')" href="javascript:void(0)" class="btn btn-insoft btn-warning">
                  <i class="icofont-edit icon-insoft"></i>
                </a>
                <a style="margin-left:8px;" title="Delete Data" onclick="deleteData(' .
                    $data->id .
                    ')" href="javascript:void(0)" class="btn btn-insoft btn-danger">
                  <i class="icofont-ui-delete icon-insoft"></i>
                </a>';
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }
}
