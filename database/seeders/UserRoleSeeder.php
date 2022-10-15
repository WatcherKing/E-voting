<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'admin',
            'email' => 'voting@gmail.com',
            'voter_no' => '123456789012345678',
            'password' => bcrypt('s3cret55')
        ]);

        $user2 = User::create([
            'name' => 'voter1',
            'email' => 'voter@gmail.com',
            'voter_no' => '123456798765432109',
            'password' => bcrypt('1234567890')
        ]);

        // Create roles and assign created permissions
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'voter']);

        $permissions = Permission::pluck('id','id')->all();

        $role1->syncPermissions($permissions);
        // $role2->givePermissionTo('role-list', 'role-edit');


        $user1->assignRole([$role1->id]);
        $user2->assignRole([$role2->id]);


    }
}
