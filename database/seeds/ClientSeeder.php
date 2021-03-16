<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'James',
                'address' => 'Reyes',
                'phone' => '09096787665',
                'capitalization' => 15000,
                'loan' => 100000
            ],
            [
                'name' => 'Lyod',
                'address' => 'Cruz',
                'phone' => '09078784321',
                'capitalization' => 50000,
                'loan' => 200000
            ],
            [
                'name' => 'Samantha',
                'address' => 'Reid',
                'phone' => '09008986744',
                'capitalization' => 40000,
                'loan' => 400000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
