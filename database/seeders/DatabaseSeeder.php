<?php

namespace Database\Seeders;

use App\Http\Controllers\BrancheController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UseerController;
use Illuminate\Database\Seeder;

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
       $this->call(UsersTableSeeder::class);
       $this->call(DepartmentsTableSeeder::class);
       $this->call(MunicipalitiesTableSeeder::class);
       $this->call(CompaniesTableSeeder::class);
       $this->call(UseersTableSeeder::class);
       $this->call(BranchesTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(ProductsTableSeeder::class);
       $this->call(IdentificationTypesTableSeeder::class);
       $this->call(ProvidersTableSeeder::class);
       $this->call(CustomersTableSeeder::class);

    }
}
