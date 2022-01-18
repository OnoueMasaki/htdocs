<?php

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
        DB::table('users')->insert([
            [
                'name' => '香風智乃',
                'email' => 'kahuu_tino@example.com',
                'password' => Hash::make('15124144'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => '天々座理世',
                'email' => 'teteza_rize@example.com',
                'password' => Hash::make('18214160'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => '宇治松千夜',
                'email' => 'uzimatsu_tiya@example.com',
                'password' => Hash::make('17919157'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
