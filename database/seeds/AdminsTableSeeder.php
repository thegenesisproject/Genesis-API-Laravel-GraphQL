<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// delete table records
        DB::table('admins')->delete();

        // insert sample records
        DB::table('admins')->insert(

            array(

                array(
                    'is_super' => true,
                    'job_title' => 'Web Developer',
                    'phone' => '+250728000111',
                    'created_at' => Carbon::now()
                ),
            )
        );

        // run model factory
        factory(App\Admin::class, 5)->create()->each(function ($admin) {
        	$admin->user()->save(factory(App\User::class)->make());
        });
    }
}
