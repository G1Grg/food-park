<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Send the password reset link to this user

        $status = Password::sendResetLink($request->only('email'));

        // Handle the response status

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', 'Password reset link sent')->with('alert-type', 'success');
        } else {

            return back()->with('status', 'Failed to send password reset link')->with('alert-type', 'error')
                ->back()->withInput($request->only('email'))
                ->withErrors(['email' => __($status)]);
        }
    }
}
