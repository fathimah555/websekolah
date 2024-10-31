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
        $role_operator = Role::create(['name' => 'operator']);


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
    
           RoleUser::create([
            'user_id' => $user_admin->id,
            'role_id' => $role_admin->id,
           ]);
           RoleUser::create([
            'user_id' => $user_operator->id,
            'role_id' => $role_operator->id,
           ]);
           

           if (!$user_admin->roles()->where('name', 'admin')->exists()) {
            $user_admin->roles()->attach($role_admin->id);
            }

            if (!$user_operator->roles()->where('name', 'operator')->exists()) {
                $user_operator->roles()->attach($role_operator->id);
                }
    

            $this->call(BeritaSeeder::class);
            $this->call(EkskulSeeder::class);
            $this->call(EventSeeder::class);
            $this->call(FasilitasSeeder::class);
            $this->call(GuruSeeder::class);
            $this->call(PrestasiSeeder::class);

    }
}
