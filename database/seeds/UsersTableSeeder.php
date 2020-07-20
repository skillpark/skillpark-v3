<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $role_freelancer = Role::where('name', 'freelancer')->first();
        $role_client  = Role::where('name', 'client')->first();

        $freelancer = new User();
        $freelancer->name = 'Freelancer Name';
        $freelancer->email = 'freelancer@skillpark.com.np';
        $freelancer->email_verified_at = now();
        $freelancer->password = bcrypt('password');
        $freelancer->save();

        $freelancer->roles()->attach($role_freelancer);
        $client = new User();
        $client->name = 'Client Name';
        $client->email = 'client@skillpark.com.np';
        $client->email_verified_at = now();
        $client->password = bcrypt('password');
        $client->save();
        $client->roles()->attach($role_client);

        // $freelancerRole = Role::where('name', 'freelancer')->first();
        // $clientRole = Role::where('name', 'client')->first();

        // $freelancer = User::create([
        //     'name' => 'Freelancer User',
        //     'email' => 'freelancer@skillpark.com.np',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'city_id' => 2,
        //     'about' => 'I am a Freelancer Test User. I can perform tasks like Create Proposal, Participate in the bidding, View Clients and Posts the given Projects.'
        // ]);

        // $client = User::create([
        //     'name' => 'Client User',
        //     'email' => 'client@skillpark.com.np',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'city_id' => 7,
        //     'about' => 'I am a Client Test User. I can perform tasks like Create Project, View the biddings, View Freelancers and Assign the Projects.'
        // ]);

        // $freelancer->roles()->attach($freelancerRole);
        // $client->roles()->attach($clientRole);
    }
}
