<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_siswa = Role::create(['name' => 'siswa']);


        $user_admin = User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin')
           ]);
           
        $user_siswa = User::create([
            'name'=> 'siswa',
            'email'=> 'siswa@gmail.com',
            'password'=> Hash::make('siswa')
           ]);
    
           

           RoleUser::create([
            'user_id' => $user_admin->id,
            'role_id' => $role_admin->id,
           ]);
           RoleUser::create([
            'user_id' => $user_siswa->id,
            'role_id' => $role_siswa->id,
           ]);
           

           if (!$user_admin->roles()->where('name', 'admin')->exists()) {
            $user_admin->roles()->attach($role_admin->id);
        }

    }
}
