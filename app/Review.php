<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id', 'park_id', 'user_id', 'object_id', 'value', 'description'
    ];
    protected $table = 'reviews';

    public function getParkReviews($park_id)
    {
        return DB::table('reviews')->where('park_id', $park_id)->orderBy('updated_at', 'desc')->get();
    }

    public function getReview($id)
    {
        return DB::table('reviews')->where('id', $id)->first();
    }
}