<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat role admin dan operator
        $role_admin = Role::create(['name' => 'admin']);
        $role_operator = Role::create(['name' => 'operator']);

        // Membuat user admin dan operator
        $user_admin = User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin')
        ]);
           
        $user_operator = User::create([
            'name'=> 'operator',
            'email'=> 'operator@gmail.com',
            'password'=> Hash::make('operator')
        ]);

        // Menambahkan role admin ke user admin
        if (!$user_admin->roles()->where('name', 'admin')->exists()) {
            $user_admin->roles()->attach($role_admin);
        }

        // Menambahkan role operator ke user operator
        if (!$user_operator->roles()->where('name', 'operator')->exists()) {
            $user_operator->roles()->attach($role_operator);
        }

        // Panggil seeder lain jika ada
        $this->call([
            BeritaSeeder::class,
            EkskulSeeder::class,
            EventSeeder::class,
            FasilitasSeeder::class,
                Seeder::class,
            PrestasiSeeder::class,
        ]);
    }
}
