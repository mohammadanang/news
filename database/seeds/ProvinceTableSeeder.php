<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    protected $data = [
        [
            'name' => 'Jawa Timur'
        ],
        [
            'name' => 'Jawa Tengah'
        ],
        [
            'name' => 'Jawa Barat'
        ],
        [
            'name' => 'Bali'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $_data) {
            \App\Province::create($_data);
        }
    }
}
