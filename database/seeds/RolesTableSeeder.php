<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $role_freelancer = new Role();
        $role_freelancer->name = 'freelancer';
        $role_freelancer->description = 'A Freelancer User';
        $role_freelancer->save();

        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->description = 'A Client User';
        $role_client->save();
    }
}
