<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Persona;
use App\Rol;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = Persona::select('id')->first();

        $rol = Rol::select('id')->first();

        $faker = Faker::create();
        for ($i=0; $i < 2; $i++) {
            DB::table('users')->insert(array(
                'id'=>$persona->id,
                'usuario' =>$faker->randomElement(['Jonel','Nicela']),
                'password' =>bcrypt($faker->randomElement(['123456','123456'])),
                'condicion'=>1,
                'idrol'=>$rol->id,
            ));
        }
    }
}
