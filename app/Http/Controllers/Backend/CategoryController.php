<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'category';
        return view('backend.category', compact('view'));
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

        $slug = strtolower($input['category_name']);
        $input['slug'] = str_replace(" ","-",$slug);

        $rules = [
            "category_name" => "required",
            "slug" => "required|unique:categories"
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

        Category::create($input);
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
        $data = Category::findorFail($id);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        $slug = strtolower($input['category_name']);
        $input['slug'] = str_replace(" ","-",$slug);

        $rules = [
            "category_name" => "required",
            "slug" => "required|".Rule::unique('categories')->ignore($id),
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

        $category = Category::findorFail($id);
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
        return Category::destroy($id);
    }

    public function category_table()
    {
        $data = Category::all();

        return DataTables::of($data)
           
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
