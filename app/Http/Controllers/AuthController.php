<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {

        // Validate the request data
        // $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // Attempt to log in
    $authAttempt = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

    if ($authAttempt) {
        return redirect()->route('/admin');
    }

        // Flash login error message
        session()->flash('loginError', 'Email or password is incorrect.');

        // Redirect back with input
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate and regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
