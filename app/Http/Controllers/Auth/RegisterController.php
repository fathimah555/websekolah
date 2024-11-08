<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |---------------------------------------------------------------------------
    | Register Controller
    |---------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Tentukan role berdasarkan email
        $role = $this->determineRole($data['email']);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Temukan role yang sesuai berdasarkan nama role
        $role = Role::where('name', $role)->first();

        // Jika role ditemukan, hubungkan ke pengguna melalui tabel pivot
        if ($role) {
            $user->roles()->attach($role); // Menambahkan role ke pengguna
        }

        return $user;
    }

    /**
     * Tentukan role berdasarkan email.
     * (Jika email adalah admin@gmail.com, maka role admin, selain itu user)
     *
     * @param  string  $email
     * @return string
     */
    protected function determineRole($email)
    {
        // Cek jika email adalah admin, beri role admin
        if ($email == 'admin@gmail.com') {
            return 'admin';
        }

        // Default role adalah user
        return 'user';
    }
}
