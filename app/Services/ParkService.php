<?php

namespace App\Services;

use App\Models\Park;
use App\Models\ParksPricing;
use App\Modules\Review\Review;
use Illuminate\Support\Facades\DB;

class ParkService
{
    private $park;
    private $query;

    public function __construct(Park $park)
    {
        $this->park = $park;
        $this->query = $park;
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

    public function joinParksListData()
    {
        return $this->query = $this->query
            ->leftJoin(ParksPricing::getMinRidePriceJoin(), 'parks_pricing.park_id', '=', 'parks.id') //joins "Min ride price"
            ->leftJoin(Review::getReviewScoreJoin(), 'reviews.park_id', '=', 'parks.id');
    }

    public function quickSortParkList()
    {
        $sortCase = $this->getSortCase();

        switch($sortCase) {
            case 0 : //No quick filter(sorter) is selected
                break;
            case 1 : //Nearby filter selected
                //todo: get current user position and park position, calculate difference, then sort by difference
                break;
            case 2 : //Reviews filter selected
                $this->query->orderBy('review_score', 'DESC');
                break;
            case 3 : //Price filter selected
                $this->query->orderBy(DB::raw("CASE WHEN min_price is null THEN 200 ELSE min_price END"), 'ASC');
                break;
        }

        $this->query->orderBy('name', 'ASC');
    }

    public function filterParks()
    {
        $attributes = $this->park->attributesToArray();

        foreach ($attributes as $k => $v) {
            $this->query->where($k, 'like', '%'. $v . '%');
        }
    }

    public function getParksListItems()
    {
        $this->joinParksListData();
        $this->quickSortParkList();
        $this->filterParks();

        return $this->query->get();
    }

    public function getParksSortedByReviews()
    {
        return $this->park
            ->leftJoin(Review::getJoinTemplate(), 'reviews.park_id', '=', 'parks.id')
            ->orderBy('review_score', 'DESC')
            ->get();
    }

    public function getParksSortedByPrice()
    {
        return $this->park
            ->leftJoin(ParksPricing::getJoinTemplate(), 'parks_pricing.park_id', '=', 'parks.id')
            ->orderBy(DB::raw("CASE WHEN min_price is null THEN 200 ELSE min_price END"), 'ASC')
            ->get();
    }

    public function getAvailableDistricts($parks = [])
    {
        $result = ["" => "-"];

        if(empty($parks)) {
            $parks = $this->park->get();
        }

        foreach ($parks as $park) {
            if($park->district) {
                $result[$park->district] = config('city.district')[$park->district] . " " . trans('public.district');
            }

        }

        return $result;
    }
}

