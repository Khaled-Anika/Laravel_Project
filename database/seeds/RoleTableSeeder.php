<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name='User';
        $role_user->description='a normal User';
        $role_user->save();

        $role_user = new Role();
        $role_user->name='Admin';
        $role_user->description='an Admin';
        $role_user->save();
    }
}
