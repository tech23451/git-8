<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function add()
    {
        // dd('addが動いた');
        return view('admin.profile.create');
    }

    public function create()
    {
        // dd('createが動いた');
        // return redirect('admin/profile/create');
        return view('admin.profile.create');
    }

    public function edit()
    {
        // dd('editが動いた');
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }

}
