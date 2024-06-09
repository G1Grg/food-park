<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfilePasswordUpdateRequest;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function index(): View
    {
        return view('admin.profile.index');
    }

    function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }

    function updateProfilePassword(ProfilePasswordUpdateRequest  $request): RedirectResponse
    {
        $user = Auth::user();

        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->success('Password updated Successfully');
        return redirect()->back();
    }
}
