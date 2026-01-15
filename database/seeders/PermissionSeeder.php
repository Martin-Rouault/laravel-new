<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->first();

        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'view-dashboard']);

        $user->assignRole($role);
        $permission->assignRole($role);
    }
}
