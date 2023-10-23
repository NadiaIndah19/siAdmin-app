<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([            
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'nik' => '12345689',
            'email_verified_at' => now(),        
            'password' => bcrypt('admin'),                        
        ]);
        

        $admin->assignRole('admin');

        $admin = User::create([            
            'name' => 'Warga',
            'nik' => '12345689',
            'email' => 'warga@admin.com',
            'email_verified_at' => now(),           
            'password' => bcrypt('warga'),                        
        ]);
        

        $admin->assignRole('warga');
    }
}
