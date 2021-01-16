<?php

namespace Database\Seeders;

use App\Models\Tasa;
use Illuminate\Database\Seeder;

class TasaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tasa::create(['valor' => 1800]);
    }
}
