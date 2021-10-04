<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function registration() {
        return view('register');
    }

    public function loginForm() {
        return view('/login');

    }

    public function dashboardCrud() {
        return view('/dashboard');

    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|min:8|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => [
                'required', 'string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols(),
            ],
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user) {
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('dgolez3198@gmail.com', 'MIDTERM PROJECT');
        });

        return redirect('/login')->with('Message', 'Your Account has been Register and Please check your email to verify your account');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at==null) {
            return redirect('/login')->with('Error', 'Your Account has not yet verified');
        }

        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('Error','Invalid Credentials.');
        }

        return redirect('/dashboard');

    }

    public function verification(User $user, $token) {
        if($user->remember_token!==$token) {
            return redirect('/login')->with('Error','Invalid Credentials.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Your Account has been succefully verify');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login')->with('Message', 'You have been logout');
    }
}
