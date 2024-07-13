<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    /**
     * Get customer with their city and state
     * @return array
     */
    public function getAllCustomers(): array
    {
        $customers = self::query()
            ->join("city", "city.id", "=", "customers.city_id");

        return $customers->get()->toArray();
    }
}
