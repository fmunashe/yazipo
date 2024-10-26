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
            ModeOfCommunicationSeeder::class,
            AuthorSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            DictionarySeeder::class,
            UtilitySeeder::class,
            OrganisationSeeder::class,
            OrganisationServiceProvisionSeeder::class,
            CurrencySeeder::class,
            QuoteSeeder::class,
            OpportunitySeeder::class,
            RequirementSeeder::class,
            ContactSeeder::class,
            OnDemandServiceSeeder::class,
            RequestedServiceSeeder::class,
            SchoolReportingSeeder::class,
            CertificationSeeder::class
        ]);
    }
}
