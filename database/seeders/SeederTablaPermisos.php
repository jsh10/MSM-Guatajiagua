<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;


class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos = [
            //Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tabla Doc
            'ver-doc',
            'crear-doc',
            'editar-doc',
            'borrar-doc',
        ];
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        };
    }
}
