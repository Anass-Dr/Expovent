<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin_role = Role::findByName('admin');
        $organizer_role = Role::findByName('organizer');

        $admin_role->givePermissionTo('manage_category');
        $admin_role->givePermissionTo('manage_user');
        $admin_role->givePermissionTo('validate_event');
        $admin_role->givePermissionTo('admin_statistic');
        $organizer_role->givePermissionTo('manage_event');
        $organizer_role->givePermissionTo('validate_reservation');
        $organizer_role->givePermissionTo('organizer_statistics');
    }
}
