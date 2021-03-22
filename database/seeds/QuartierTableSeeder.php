<?php


use App\Models\Quartier;
use Illuminate\Database\Seeder;

class QuartierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Quartier::class,15)->create();
    }
}
