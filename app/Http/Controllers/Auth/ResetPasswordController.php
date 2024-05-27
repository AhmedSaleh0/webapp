<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResetPasswordController extends Controller
{
    /**
     * Display the password reset form.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function showResetForm(Request $request)
    {
        return view('auth.reset-password', [
            'token' => $request->query('token'),
            'email' => $request->query('email'),
        ]);
    }

    /**
     * Handle the password reset request.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $response = Http::post('http://localhost:8888/i-plus/backend/public/api/reset-password', [
            'token' => $request->token,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if ($response->successful()) {
            return redirect()->route('login')->with('status', 'Password reset successfully.');
        }

        return back()->withErrors(['email' => 'Failed to reset password.']);
    }
}
