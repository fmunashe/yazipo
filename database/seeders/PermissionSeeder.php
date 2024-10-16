<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'auth_profile_edit'],
            ['title' => 'user_management_access'],
            ['title' => 'permission_create'],
            ['title' => 'permission_edit'],
            ['title' => 'permission_show'],
            ['title' => 'permission_delete'],
            ['title' => 'permission_access'],
            ['title' => 'role_create'],
            ['title' => 'role_edit'],
            ['title' => 'role_show'],
            ['title' => 'role_delete'],
            ['title' => 'role_access'],
            ['title' => 'user_create'],
            ['title' => 'user_edit'],
            ['title' => 'user_show'],
            ['title' => 'user_delete'],
            ['title' => 'user_access'],
            ['title' => 'config_list_access'],
            ['title' => 'main_dashboard_access'],
            ['title' => 'country_access'],
            ['title' => 'country_create'],
            ['title' => 'country_show'],
            ['title' => 'country_edit'],
            ['title' => 'country_delete'],
            ['title' => 'province_access'],
            ['title' => 'province_create'],
            ['title' => 'province_show'],
            ['title' => 'province_edit'],
            ['title' => 'province_delete'],
            ['title' => 'district_access'],
            ['title' => 'district_create'],
            ['title' => 'district_show'],
            ['title' => 'district_edit'],
            ['title' => 'district_delete'],
            ['title' => 'key_population_access'],
            ['title' => 'key_population_create'],
            ['title' => 'key_population_show'],
            ['title' => 'key_population_edit'],
            ['title' => 'key_population_delete'],
            ['title' => 'project_access'],
            ['title' => 'project_create'],
            ['title' => 'project_show'],
            ['title' => 'project_edit'],
            ['title' => 'project_delete'],
            ['title' => 'service_access'],
            ['title' => 'service_create'],
            ['title' => 'service_show'],
            ['title' => 'service_edit'],
            ['title' => 'service_delete'],
            ['title' => 'service_provider_access'],
            ['title' => 'service_provider_create'],
            ['title' => 'service_provider_show'],
            ['title' => 'service_provider_edit'],
            ['title' => 'service_provider_delete'],
            ['title' => 'location_access'],
            ['title' => 'location_create'],
            ['title' => 'location_show'],
            ['title' => 'location_edit'],
            ['title' => 'location_delete'],
            ['title' => 'mode_of_communication_access'],
            ['title' => 'mode_of_communication_create'],
            ['title' => 'mode_of_communication_show'],
            ['title' => 'mode_of_communication_edit'],
            ['title' => 'mode_of_communication_delete'],
            ['title' => 'beneficiary_access'],
            ['title' => 'beneficiary_create'],
            ['title' => 'beneficiary_show'],
            ['title' => 'beneficiary_edit'],
            ['title' => 'beneficiary_delete'],
            ['title' => 'case_file_access'],
            ['title' => 'case_file_create'],
            ['title' => 'case_file_show'],
            ['title' => 'case_file_edit'],
            ['title' => 'case_file_delete'],
            ['title' => 'author_access'],
            ['title' => 'author_create'],
            ['title' => 'author_show'],
            ['title' => 'author_edit'],
            ['title' => 'author_delete']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
