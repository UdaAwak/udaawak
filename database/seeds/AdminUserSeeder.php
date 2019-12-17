<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin UdaAwak',
            'email' => 'udaawak.gms@gmail.com',
            'password' => bcrypt('285013ua'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
