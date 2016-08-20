<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::reguard();
        factory(App\Todos::class, 50)->create();
        Model::reguard();
    }
}
