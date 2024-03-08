<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Permission::create(['name' => 'manage_category']);
        Permission::create(['name' => 'manage_user']);
        Permission::create(['name' => 'validate_event']);
        Permission::create(['name' => 'admin_statistic']);
        Permission::create(['name' => 'manage_event']);
        Permission::create(['name' => 'validate_reservation']);
        Permission::create(['name' => 'organizer_statistics']);
    }
}
