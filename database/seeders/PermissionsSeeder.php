<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'admin']);
        $role->syncPermissions("administrar");
        // create user
        $user1 = User::create([
            'dni' => '99999999',
            'firstname' => 'Espinoza',
            'lastname' => 'Alarcon',
            'names' => 'Jesus Fernando',
            'password' => Hash::make('123'),
            'datebirth' => '1997-12-16',
            'cellphone' => '999666333',
            'sex' => 'M',
            'email' => 'jesus.20.tv@gmail.com',
        ]);

        //asignar rol
        $user1->assignRole('admin');

        ///////////////////////////////////////////////////////////////////////
        Permission::create(['name' => 'listar']);
        $role = Role::create(['name' => 'student']);
        $role->syncPermissions("listar");
        // create user
        $user2 = User::create([
            'dni' => '44444444',
            'firstname' => 'mendoza',
            'lastname' => 'valencia',
            'names' => 'roberto',
            'password' => Hash::make('123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'estudiante18@gmail.com',
        ]);
          //asignar rol
        $user2->assignRole('student');
    }
}
