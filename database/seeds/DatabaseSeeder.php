<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);

        factory(App\Product::class, 30)->create();
        factory(App\User::class, 3)->create();

        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('rorro13'),

        ]);
    }
}
