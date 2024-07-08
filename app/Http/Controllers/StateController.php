<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StateController extends Controller
{

    /**
     * Get all states
     *
     * @return array
     */
    public function getList(): array
    {
        $result = [];
        $states = DB::table('city')
            ->selectRaw('state')
            ->groupBy('state')
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
