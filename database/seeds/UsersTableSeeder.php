<?php

use App\User;
use Illuminate\Database\Seeder;

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

        $freelancer = new User();
        $freelancer->name = 'Freelancer Name';
        $freelancer->email = 'freelancer@skillpark.com.np';
        $freelancer->email_verified_at = now();
        $freelancer->password = bcrypt('password');
        $freelancer->save();

        $client = new User();
        $client->name = 'Client Name';
        $client->email = 'client@skillpark.com.np';
        $client->email_verified_at = now();
        $client->password = bcrypt('password');
        $client->save();
    }
}
