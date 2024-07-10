<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'city';

    public function getStates(): array
    {
        $result = [];
        $states = self::groupBy('state')
            ->selectRaw('state')
            ->get()
            ->all();

        if (!empty($states)) {
            foreach ($states as $state) {
                $result[$state->state] = $state->state;
            }
        }

        return $result;
    }

    public function getCityByState(string $state): string
    {
        $result = [];
        $cities = City::where('state', $state)
            ->get()->all();

        if (!empty($cities)) {
            foreach ($cities as $city) {
                $result[$city->id] = $city->city;
            }
        }

        return json_encode($result);
    }
}
