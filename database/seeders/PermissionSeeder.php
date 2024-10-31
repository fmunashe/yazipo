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
            ['title' => 'author_delete'],
            ['title' => 'category_access'],
            ['title' => 'category_create'],
            ['title' => 'category_show'],
            ['title' => 'category_edit'],
            ['title' => 'category_delete'],
            ['title' => 'article_access'],
            ['title' => 'article_create'],
            ['title' => 'article_show'],
            ['title' => 'article_edit'],
            ['title' => 'article_delete'],
            ['title' => 'dictionary_access'],
            ['title' => 'dictionary_create'],
            ['title' => 'dictionary_show'],
            ['title' => 'dictionary_edit'],
            ['title' => 'dictionary_delete'],
            ['title' => 'organisation_access'],
            ['title' => 'organisation_create'],
            ['title' => 'organisation_show'],
            ['title' => 'organisation_edit'],
            ['title' => 'organisation_delete'],
            ['title' => 'utility_access'],
            ['title' => 'utility_create'],
            ['title' => 'utility_show'],
            ['title' => 'utility_edit'],
            ['title' => 'utility_delete'],
            ['title' => 'organisation_service_provision_access'],
            ['title' => 'organisation_service_provision_create'],
            ['title' => 'organisation_service_provision_show'],
            ['title' => 'organisation_service_provision_edit'],
            ['title' => 'organisation_service_provision_delete'],
            ['title' => 'currency_access'],
            ['title' => 'currency_create'],
            ['title' => 'currency_show'],
            ['title' => 'currency_edit'],
            ['title' => 'currency_delete'],
            ['title' => 'quote_access'],
            ['title' => 'quote_create'],
            ['title' => 'quote_show'],
            ['title' => 'quote_edit'],
            ['title' => 'quote_delete'],
            ['title' => 'opportunity_access'],
            ['title' => 'opportunity_create'],
            ['title' => 'opportunity_show'],
            ['title' => 'opportunity_edit'],
            ['title' => 'opportunity_delete'],
            ['title' => 'requirement_access'],
            ['title' => 'requirement_create'],
            ['title' => 'requirement_show'],
            ['title' => 'requirement_edit'],
            ['title' => 'requirement_delete'],
            ['title' => 'contact_access'],
            ['title' => 'contact_create'],
            ['title' => 'contact_show'],
            ['title' => 'contact_edit'],
            ['title' => 'contact_delete'],
            ['title' => 'ondemand_service_access'],
            ['title' => 'ondemand_service_create'],
            ['title' => 'ondemand_service_show'],
            ['title' => 'ondemand_service_edit'],
            ['title' => 'ondemand_service_delete'],
            ['title' => 'requested_service_access'],
            ['title' => 'requested_service_create'],
            ['title' => 'requested_service_show'],
            ['title' => 'requested_service_edit'],
            ['title' => 'requested_service_delete'],
            ['title' => 'image_gallery_access'],
            ['title' => 'image_gallery_create'],
            ['title' => 'image_gallery_show'],
            ['title' => 'image_gallery_edit'],
            ['title' => 'image_gallery_delete'],
            ['title' => 'images_access'],
            ['title' => 'images_create'],
            ['title' => 'images_show'],
            ['title' => 'images_edit'],
            ['title' => 'images_delete'],
            ['title' => 'school_reporting_access'],
            ['title' => 'school_reporting_create'],
            ['title' => 'school_reporting_show'],
            ['title' => 'school_reporting_edit'],
            ['title' => 'school_reporting_delete'],
            ['title' => 'school_report_access'],
            ['title' => 'school_report_create'],
            ['title' => 'school_report_show'],
            ['title' => 'school_report_edit'],
            ['title' => 'school_report_delete'],
            ['title' => 'certification_access'],
            ['title' => 'certification_create'],
            ['title' => 'certification_show'],
            ['title' => 'certification_edit'],
            ['title' => 'certification_delete'],
            ['title' => 'video_access'],
            ['title' => 'video_create'],
            ['title' => 'video_show'],
            ['title' => 'video_edit'],
            ['title' => 'video_delete'],
            ['title' => 'video_stream_access'],
            ['title' => 'video_stream_create'],
            ['title' => 'video_stream_show'],
            ['title' => 'video_stream_edit'],
            ['title' => 'video_stream_delete']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
