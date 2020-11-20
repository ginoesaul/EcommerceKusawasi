<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \Illuminate\Support\Facades\DB::table('roles')->insert([
            ['name' => 'Administrador' ,'guard_name'=>'web', 'description' => 'Puede hacer cualquier cosa'],
            ['name' => 'Empleado' ,'guard_name'=>'web', 'description' => 'Puede editar y crear productos, agregar nuevas marcas y categorías, administrar comentarios'],
            ['name' => 'Cliente' ,'guard_name'=>'web', 'description' => 'Puede crear productos y administrar comentarios'],
        ]);

    }
}
