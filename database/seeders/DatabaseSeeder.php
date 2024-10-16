<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            PermissionRoleSeeder::class,
            UsersSeeder::class,
            RoleUserSeeder::class,
            CountrySeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            KeyPopulationSeeder::class,
            LocationSeeder::class,
            ProjectSeeder::class,
            ServiceSeeder::class,
            ServiceProviderSeeder::class,
            ModeOfCommunicationSeeder::class
        ]);
    }
}
