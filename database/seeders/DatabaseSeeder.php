<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $defaultValues = [
            'password' => Hash::make('123'),
            'is_active' => true,
        ];

         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'user@gmail.com',
             'email_verified_at' => now(),
             ...$defaultValues
         ]);

        \App\Models\Admin::factory()->createMany(
            [
                [
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    ...$defaultValues
                ],
                [
                    'name' => 'Sale 1',
                    'email' => 'sale1@gmail.com',
                    'is_sale' => true,
                    ...$defaultValues
                ],
                [
                    'name' => 'Sale 2',
                    'email' => 'sale2@gmail.com',
                    'is_sale' => true,
                    ...$defaultValues
                ],
                [
                    'name' => 'Sale 3',
                    'email' => 'sale3@gmail.com',
                    'is_sale' => true,
                    ...$defaultValues
                ]
            ]
        );
    }
}
