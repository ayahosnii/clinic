<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::FRONT_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('front_guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.login');
    }

        // Handle the login request
        public function login(Request $request)
        {
            // Validate the login data
            $request->validate([
                'phone_number' => 'required',
                'password' => 'required',
            ]);

            // Attempt to log in the user
            if (Auth::guard('dentist')->attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
                // Authentication was successful for the "dentists" guard
                return redirect()->route('front.home'); // Redirect to the intended page or your desired location
            }

            // Authentication failed
            return back()->withErrors(['email' => 'Invalid login credentials'])->withInput();
        }

        // Logout the user
        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login');
        }
}
