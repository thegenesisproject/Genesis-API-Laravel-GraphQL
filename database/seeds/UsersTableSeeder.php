<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete table records
        DB::table('users')->delete();

        // insert sample records
        DB::table('users')->insert(

            array(

                array(
                	'name' => 'Super Admin',
                    'username' => 'admin',
                    'email' => 'admin@test.test',
                    'password' => bcrypt('admin'),
                    'created_at' => Carbon::now(),
                    'userable_id' => 1,
                    'userable_type' => 'App\Admin'
                ),

                array(
                	'name' => 'Test User',
                    'username' => 'test',
                    'email' => 'test@test.test',
                    'password' => bcrypt('test'),
                    'created_at' => Carbon::now(),
                    'userable_id' => 0,
                    'userable_type' => ''
                ),
            )
        );

        // run model factory
        factory(App\User::class, 3)->create();
    }
}
