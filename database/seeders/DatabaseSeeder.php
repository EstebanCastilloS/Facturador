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

       $this->call(DepartmentsTableSeeder::class);
       $this->call(MunicipalitiesTableSeeder::class);
       $this->call(CompaniesTableSeeder::class);
       $this->call(BranchesTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(ProductsTableSeeder::class);
       $this->call(IdentificationTypesTableSeeder::class);
       $this->call(ProvidersTableSeeder::class);
       $this->call(CustomersTableSeeder::class);
       $this->call(PercentageSeeder::class);
       $this->call(CardsTableSeeder::class);
       $this->call(BanksTableSeeder::class);
       $this->call(PaymentMethodsTableSeeder::class);
       $this->call(PymentFormsTableSeeder::class);
    }
}
