<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = 'profile';

        $data = Admin::find(Auth::guard('admin')->user()->id);
        return view('backend.profile', compact('view', 'data'));
    }

    public function profile_update(Request $request)
    {
        $input = $request->all();

        // Ambil data admin berdasarkan ID dari input
        $admin = Admin::find($input['id']);

        if (!$admin) {
            return redirect()
                ->back()
                ->withErrors(['Admin tidak ditemukan.']);
        }

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('admins')->ignore($admin->id)],
        ]);

        // Update data
        $admin->name = $input['name'];
        $admin->email = $input['email'];
        $admin->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data admin berhasil diperbarui.');
    }

    public function change_password()
    {
        $view = 'change-password';
        return view('backend.change_password', compact('view'));
    }

    public function password_update(Request $request)
    {
        
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:4',
        ]);

        $admin = Admin::find($request->id);

        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai.']);
        }

        $admin->password = Hash::make($request->password);
        $admin->save();

        return back()->with('success', 'Password berhasil diubah.');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
