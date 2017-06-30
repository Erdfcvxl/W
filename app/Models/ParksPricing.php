<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParksPricing extends Model
{
    protected $fillable = [
        'park_id',
        'weekday',
        'start_time',
        'end_time',
        'wakeboarding_price',
        'other_prices',
    ];
    protected $table = 'parks_pricing';

    public function park()
    {
        return $this->hasOne('App\Models\Park', 'id', 'park_id');
    }

    public static function getJoinTemplate()
    {
        $select = 'park_id,
            min(wakeboarding_price) as min_price';

        return DB::raw('(SELECT ' . $select . '
            FROM parks_pricing
            GROUP BY park_id
            ) as parks_pricing
        ');
    }
}
