<?php

use Illuminate\Database\Seeder;

class categoriasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\categorias::class, 10)->create();
  
    }
}
