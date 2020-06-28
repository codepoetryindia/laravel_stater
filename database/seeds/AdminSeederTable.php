<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'mobile' => '9865298652',
            'verified' => 1,
            'password' => Hash::make('password')
        ]);
    }
}
