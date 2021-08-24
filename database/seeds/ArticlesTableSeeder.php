<?php
use App\producto;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        producto::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            producto::create([
                'NombreArticulo' => $faker->sentence,
                'Seccion' => $faker->paragraph,
                'Precio' => 1,
                'Fecha' => $faker->paragraph,
                'PaisOrigen' => $faker->paragraph,

                
            ]);
        }
    }
}



