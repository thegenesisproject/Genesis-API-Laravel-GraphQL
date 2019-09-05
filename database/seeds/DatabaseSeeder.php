<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->call(UsersTableSeeder::class);
        $this->command->info("Users table seeded successfully ;)");

        $this->call(AdminsTableSeeder::class);
        $this->command->info("Admins table seeded successfully :)");
    }
}
