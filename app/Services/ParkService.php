<?php

namespace App\Services;

use App\Models\Park;
use App\Models\ParksPricing;
use App\Modules\Review\Review;
use Illuminate\Support\Facades\DB;

class ParkService
{
    private $park;

    public function __construct(Park $park)
    {
        $this->park = $park;
    }

    public function setSort($attributes)
    {
        if(! empty($attributes['sort_by'])) {
            $this->park->setSortBy('sort_by_' . $attributes['sort_by']);
        }
    }

    public function getSortCase()
    {
        if($this->park->getSortBy('sort_by_price'))
            return 3;

        if($this->park->getSortBy('sort_by_reviews'))
            return 2;

        if($this->park->getSortBy('sort_by_nearby'))
            return 1;

        return 0;
    }

    public function getParks()
    {
        $sortCase = $this->getSortCase();

        switch($sortCase) {
            case 0 : //No quick filter(sorter) is selected
                $this->park = $this->park->orderBy('name', 'ASC');

            case 1 : //Nearby filter selected
                 //todo: get current user position and park position, calculate difference, then sort by difference
                break;
            case 2 : //Reviews filter selected
                $this->park = $this->park
                    ->leftJoin(Review::getJoinTemplate(), 'reviews.park_id', '=', 'parks.id')
                    ->orderBy('review_score', 'DESC');
                break;
            case 3 : //Price filter selected
                //todo: create filter
        }

        return $this->park->get();
    }

    public function getParksSortedByPrice()
    {
        $this->park = $this->park
            ->leftJoin(ParksPricing::getJoinTemplate(), 'parks_pricing.park_id', '=', 'parks.id')
            ->orderBy(DB::raw("CASE WHEN min_price is null THEN 200 ELSE min_price END"), 'ASC');

        return $this->park->get();
    }

    public function updatePark($id, $attributes)
    {
        $this->park = $this->park->find($id);
        if($this->park->update($attributes)) {
            return true;
        }

        return false;
    }
}

