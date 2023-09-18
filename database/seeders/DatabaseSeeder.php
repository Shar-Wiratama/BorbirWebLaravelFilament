<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Admin5',
            'email' => 'admin5@test.com',
        ]);

        $user2 = User::factory()->create([
            'name' => 'Anggota5',
            'email' => 'anggota5@test.com',
        ]);

        $role = Role::create(['name' => 'admin']);
        $user1->assignRole($role);

        $role = Role::create(['name' => 'anggota']);
        $user2->assignRole($role);
    }
}
