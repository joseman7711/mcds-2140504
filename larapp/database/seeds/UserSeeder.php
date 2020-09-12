<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'Joseman San', 
            'email'      => 'jmss@gmail.com',
            'phone'      => 3165555787,
            'birthdate'  => '1970-08-21',
            'Gender'     => 'Male',
            'address'    => 'Av Rojas 54',
            'password'   => bcrypt('admin'),
            'role'       => 'Admin',
            'created_at' => now(),
        ]);

        $usr = new User;
        $usr->name       = 'Homero Simpson';
        $usr->email      = 'homeros@gmail.com';
        $usr->phone      = 3177555787;
        $usr->birthdate  = '1980-09-11';
        $usr->gender     = 'Male';
        $usr->address    = 'Av Rojas 54';
        $usr->password   = bcrypt('customer');
        $usr->save();

 //Fatory

        factory(App\User::class, 100)->create();
    }
}
