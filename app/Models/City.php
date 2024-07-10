<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'city';

    public function getStates()
    {
        $result = [];
        $states = self::groupBy('state')
            ->selectRaw('state')
            ->get()
            ->all();

        if (!empty($states)) {
            foreach ($states as $k => $state) {
                $result[$k] = $state->state;
            }
        }

        return $result;
    }
}
