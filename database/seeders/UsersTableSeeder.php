<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create(['name' => 'admin']);
        $marchantRole = Role::create(['name' => 'marchant']);

        $admin = User::query()->create([
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
        ]);

        $marchant = User::query()->create([
            'name' => 'Example Marchant',
            'email' => 'marchant@mail.com',
            'password' => Hash::make('marchant'),
        ]);


        $admin->assignRole($adminRole);
        $marchant->assignRole($marchantRole);
    }
}
