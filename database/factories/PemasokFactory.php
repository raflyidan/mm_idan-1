<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Pemasok::class, function (Faker $faker) {
    return [
        'kode_pemasok' => $faker->numberBetween(1000,100000),
        'nama_pemasok' => $faker->company(50,100),
        'alamat' => $faker->address(100,1000),
        'kota' => $faker->city(500,1000),
        'no_telp' => $faker->phoneNumber(20,100)
    ];
});
