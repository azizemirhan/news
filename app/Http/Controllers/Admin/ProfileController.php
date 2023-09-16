<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Http\Requests\AdminPasswordUpdateRequest;
use App\Models\Admin;

class ProfileController extends Controller
{
    use Traits\FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::guard('admin')->user();

        return view('admin.profile.index', compact('user'));
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
    public function update(AdminProfileUpdateRequest $request, string $id)
    {
        
        $imagePath = $this->handlerFileUpload($request,'image_url', $request->old_image_url);
        $admin = Admin::findOrFail($id);
        $admin->image_url = !empty($imagePath) ? $imagePath : $request->old_image_url;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->back();
    }
    public function passwordUpdate(AdminPasswordUpdateRequest $request, string $id) {
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
