<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Item::class, function (Faker $faker) {
    $end = $faker->numberBetween(0, 100);
    $current = $faker->numberBetween($end, 1000);
    $start = $faker->numberBetween(0, 10) == 0 ? $current : ($current == 1000 ? 1000 : $faker->numberBetween($current, 1000));
    $opened = $faker->numberBetween(0, 10) == 0 ? null : $faker->dateTimeBetween('-1 year', 'now');
    $spoil = null;
    if($opened != null){
        $spoilHours = $faker->dateTimeBetween($opened, '+24 hours');
        $spoilDays = $faker->dateTimeBetween($opened, '+15 days');
        $spoilYear = $faker->dateTimeBetween($opened, '+2 years');
        $spoilLong = $faker->dateTimeBetween($opened, '+10 years');
        $spoils = [
            null,
            null,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilHours,
            $spoilDays,
            $spoilDays,
            $spoilDays,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilYear,
            $spoilLong,
            $spoilLong,
            $spoilLong,
            $spoilLong
        ];
        $spoil = $spoils[$faker->randomKey($spoils)];
    }
    return [
        'name' => $faker->text(50),
        'usage_type_id' => 0,
        'usage_type_child' => null,
        'usage_type_count' => null,
        'count_start' => $start,
        'count_current' => $current,
        'count_end' => $end,
        //'notes' => $faker->numberBetween(0, 10) == 0 ? $faker->paragraphs(3, true) : "",
        'nfc_id' => $faker->numberBetween(0, 10) == 0 ? null : $faker->uuid,
        'opened' => $opened,
        'spoil' => $spoil//,
         //'edited' => null
    ];
});
