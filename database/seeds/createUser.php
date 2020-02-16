<?php

use App\User;
use Illuminate\Database\Seeder;

class createUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'id' => '777',
                'id_number' => '10000012454',
                'first_name' => 'ghiath',
                'last_name' => 'shamma',
                'email' => 'ghiathshamma2000@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
        User::create(
            [
                'id' => '888',
                'id_number' => '10000012453',
                'first_name' => 'feras',
                'last_name' => 'shamma',
                'email' => 'ghiathshamma2000@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
        User::create(
            [
                'id' => '444',
                'id_number' => '10000012312',
                'first_name' => 'randa',
                'last_name' => 'shamma',
                'email' => 'ghiathshamma2000@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
        User::create(
            [
                'id' => '555',
                'id_number' => '10000012312',
                'first_name' => 'lama',
                'last_name' => 'shamma',
                'email' => 'lamaalzoubi73@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
        User::create(
            [
                'id' => '222',
                'id_number' => '10000012312',
                'first_name' => 'fathi',
                'last_name' => 'shamma',
                'email' => 'ghiathshamma2002@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
        User::create(
            [
                'id' => '999',
                'id_number' => '10000012312',
                'first_name' => 'ahmad',
                'last_name' => 'shamma',
                'email' => 'ghiathshamma2001@hotmail.com',
                'phone' => '0994547308',
                'city' => 'damascus',
                'area' => 'damascus',
                'street' => 'rukn aldin',
                'balance' => '50000',
            ]
        );
    }
}
