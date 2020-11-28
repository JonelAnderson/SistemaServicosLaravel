<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tablas para desactivar, limpiar datos y volver activar las llaves foraneas
        $this->truncateTables([
            'users',
            'personas',

        ]);
        //Aqui se añade todos los seeder creados
        // $this->call(UsersTableSeeder::class);
        $this->call([
            PersonasTableSeeder::class,
            UsersTableSeeder::class,
        ]);

    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
