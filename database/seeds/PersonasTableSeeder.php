<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 5; $i++) {
            DB::table('personas')->insert(array(
                'nombre' => $faker->name,
                'tipo_documento'  => $faker->randomElement(['RUC','PASAPORTE','DNI']),
                'num_documento'  => $faker->randomElement(['56847845','68741523','48245678']),
                'direccion'  => $faker->randomElement(['Av. Tito Jaime 456','Jr. Las palmas 873','Av. Amazonas 1023']),
                'telefono'  => $faker->randomElement(['956847845','968741523','948245678']),
                'email'  => $faker->randomElement(['dioner@gmail.com','joe@gmail.com','den@gmail.com']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
