<?php

use Illuminate\Database\Seeder;

class productosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\productos::class, 10)->create();
  
    }
}
