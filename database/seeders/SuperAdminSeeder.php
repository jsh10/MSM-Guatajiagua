<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => 'Amilcar López',
            'email' => 'aLopez@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        //Por si no hemos creado rol administrador descomentamos esto
        //$rol = Role::create(['name' => 'Administrador']);
        //$permisos = Permission::pluck('id', 'id')->all();

        //$rol->syncPermissions($permisos);
        //$usuario->assignRole([$rol->id]);

        //****************** */
        //Por si solo queremos crear una nueva cuenta con ese rol
        $usuario->assignRole('Administrador');
    }
}
