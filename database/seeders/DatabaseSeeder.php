<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\User;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // \App\Models\User::factory(10)->create();

            User::factory()->create(['name' => 'Yusuf Can', 'surname' => 'TÜRK', 'phone' => '0532 123 45 67', 'company' => 'Can Company', 'tax_number' => '1234567890', 'tax_office' => 'Can Tax Office', 'email' => 'can@test.com', 'password' => bcrypt('can123'),]);
        }
    }
