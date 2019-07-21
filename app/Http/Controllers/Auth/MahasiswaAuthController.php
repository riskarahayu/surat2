<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\UserMahasiswa;

class MahasiswaAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginPage() {
        return view('auth.mahasiswa_login');
    }

     public function showRegisterPage() {
        return view('auth.mahasiswa_register');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('mahasiswa')->attempt($credentials)) {
            return redirect()->intended('/surat');
        }

        return redirect()->back();
    }

    public function register(Request $request) {
        $request->validate([
            'nim' => 'required',
            'email' => 'required',
            'password' => 'required',
            'ktm' => 'required|image',
            'slip_spp' => 'required|image'
        ]);

        $path = $request->file('ktm')->store('ktm');
        $path_2 = $request->file('slip_spp')->store('slip_spp');

        $user_mahasiswa = UserMahasiswa::create([
            'nim' => $request->nim,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'ktm' => $path,
            'slip_spp' => $path_2
        ]);

        $credentials = $request->only('email', 'password');
        Auth::guard('mahasiswa')->attempt($credentials);

        return redirect('/');
    }

    public function getExtension($file) {
        $name = $file->getClientOriginalName();
        $name_array = explode('.', $name);
        $name_array_length = count($name_array);
        $extension = $name_array[$name_array_length-1];
        return $extension;
        // return ;
    }

     public function check() {
        return Auth::guard('staff')->user();
    }

    public function logout() {
        return Auth::guard('staff')->logout();
    }

}
