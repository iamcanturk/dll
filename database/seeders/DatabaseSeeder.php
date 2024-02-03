<?php

    namespace Database\Seeders;

    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use App\Models\User;
    use App\Models\Offer;
    use App\Models\Domain;
    use App\Models\Service;
    use App\Models\Cabinet;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // \App\Models\User::factory(10)->create();

            User::factory()->create(['name' => 'Yusuf Can', 'surname' => 'TÜRK', 'phone' => '0532 123 45 67', 'company' => 'Can Company', 'tax_number' => '1234567890', 'tax_office' => 'Can Tax Office', 'email' => 'can@test.com', 'role'=>'admin','password' => bcrypt('can123'),]);
            User::factory()->create(['name' => 'Ahmet', 'surname' => 'YILMAZ', 'phone' => '0532 123 45 67', 'company'
            => 'Yılmaz Company', 'tax_number' => '1234567890', 'tax_office' => 'Yılmaz Tax Office', 'email' => 'ahmet@yilmaz.com', 'role'=>'user','password' => bcrypt('ahmet123'),]);
            Service::factory()->create(['name' => 'VPS 1', 'disk' => '20 GB', 'ram' => '2 GB', 'cpu' => '1 Core', 'port' => '1', 'price' => '50', 'price_currency' => 'TRY', 'status' => 'active', 'description' => 'VPS 1 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);
            Service::factory()->create(['name' => 'VPS 2', 'disk' => '40 GB', 'ram' => '4 GB', 'cpu' => '2 Core', 'port' => '2', 'price' => '100', 'price_currency' => 'USD', 'status' => 'passive', 'description' => 'VPS 2 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);
            Service::factory()->create(['name' => 'VPS 3', 'disk' => '60 GB', 'ram' => '6 GB', 'cpu' => '3 Core', 'port' => '3', 'price' => '150', 'price_currency' => 'EUR', 'status' => 'waiting_payment', 'description' => 'VPS 3 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);

            Domain::factory()->create(['name' => 'test.com', 'url' => 'https://test.com', 'dns' => 'dnsdll.com,dns2dll.com', 'price' => '50', 'price_currency' => 'TRY', 'status' => 'active', 'description' => 'test.com Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);
            Domain::factory()->create(['name' => 'test2.com', 'url' => 'https://test2.com', 'dns' => 'dnsdll.com,dns2dll.com', 'price' => '100', 'price_currency' => 'USD', 'status' => 'passive', 'description' => 'test2.com Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);
            Domain::factory()->create(['name' => 'test3.com', 'url' => 'https://test3.com', 'dns' => 'dnsdll.com,dns2dll.com', 'price' => '150', 'price_currency' => 'EUR', 'status' => 'waiting_payment', 'description' => 'test3.com Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);

            Offer::factory()->create(['name' => 'Teklif 1', 'service_type' => 'domain', 'details' => 'Teklif 1 Açıklama', 'status' => 'active', 'user_id' => '2',]);
            Offer::factory()->create(['name' => 'Teklif 2', 'service_type' => 'server', 'details' => 'Teklif 2 Açıklama', 'status' => 'passive', 'user_id' => '2',]);

            Cabinet::factory()->create(['name' => 'Kabin 1', 'u_size' => '15U', 'internet' => '50 Mbps', 'uplink' => '1 Gbps', 'ip' => '29', 'anti_ddos' => 'yes', 'price' => '50', 'price_currency' => 'TRY', 'status' => 'active', 'description' => 'Kabin 1 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);

            Cabinet::factory()->create(['name' => 'Kabin 2', 'u_size' => '23U', 'internet' => '100 Mbps', 'uplink' =>
                '1 Gbps', 'ip' => '28', 'anti_ddos' => 'no', 'price' => '100', 'price_currency' => 'USD', 'status' =>
                'passive', 'description' => 'Kabin 2 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' =>
                '2',]);

            Cabinet::factory()->create(['name' => 'Kabin 3', 'u_size' => '47U', 'internet' => '1 Gbps', 'uplink' =>
                '10 Gbps', 'ip' => '27', 'anti_ddos' => 'yes', 'price' => '150', 'price_currency' => 'EUR', 'status'
            => 'waiting_payment', 'description' => 'Kabin 3 Açıklama', 'expired_date' => '2022-01-01 00:00:00', 'user_id' => '2',]);

            }
    }
