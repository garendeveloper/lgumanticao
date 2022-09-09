<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Office::factory()->create([
            'office' => 'Malgecco',
        ]);
        \App\Models\DesignatedOfficer::factory()->create([
            'designation' => 'PROGRAMMER',
            'office_id' => 1,
        ]);

        \App\Models\User::factory(1)->create();

        \App\Models\BankAccount::factory()->create([
            'bankaccount_name' => 'LBP-VELEZ',
            'address' => 'CAGAYAN DE ORO CITY',
        ]);

        \App\Models\Fund::factory()->create([
            'fund' => 'SEF',
            'code' => '200',
            'account_no' => '2412-1080-03',
            'bankaccount_id'=> 1,
        ]);

        \App\Models\Year::factory()->create([
            'year' => 2022,
        ]);
    }
}
