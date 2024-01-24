<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\User;
    use App\Models\Service;
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

            Service::factory()->create(['name' => 'Web Hosting', 'disk' => '10 GB', 'ram' => '1 GB', 'cpu' => '1 Core', 'port' => '80', 'price' => '10', 'status' => '1', 'description' => 'Web Hosting', 'user_id' => '1',]);
            Service::factory()->create(['name' => 'Web Hosting', 'disk' => '20 GB', 'ram' => '2 GB', 'cpu' => '2 Core', 'port' => '80', 'price' => '20', 'status' => '1', 'description' => 'Web Hosting', 'user_id' => '1',]);
            Service::factory()->create(['name' => 'Web Hosting', 'disk' => '30 GB', 'ram' => '3 GB', 'cpu' => '3 Core', 'port' => '80', 'price' => '30', 'status' => '1', 'description' => 'Web Hosting', 'user_id' => '1',]);
            Service::factory()->create(['name' => 'Web Hosting', 'disk' => '40 GB', 'ram' => '4 GB', 'cpu' => '4 Core', 'port' => '80', 'price' => '40', 'status' => '1', 'description' => 'Web Hosting', 'user_id' => '1',]);
            Service::factory()->create(['name' => 'Web Hosting', 'disk' => '50 GB', 'ram' => '5 GB', 'cpu' => '5 Core', 'port' => '80', 'price' => '50', 'status' => '1', 'description' => 'Web Hosting', 'user_id' => '1',]);


        }
    }
