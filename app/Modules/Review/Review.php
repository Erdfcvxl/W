<?php

namespace App\Modules\Review;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    protected $fillable = [
        'id',
        'park_id',
        'user_id',
        'cable_system_score',
        'cable_system_desc',
        'water_score',
        'water_desc',
        'surroundings_score',
        'surroundings_desc',
        'staff_score',
        'staff_desc'
    ];
    protected $table = 'reviews';

    public function getObjectsReviews() {
        return $this->hasMany('App\Modules\ReviewObject', 'park_id', 'park_id');
    }

    public function getParkReviews($park_id)
    {
        return DB::table('reviews')->where('park_id', $park_id)->orderBy('updated_at', 'desc')->get();
    }

    public function getReview($id)
    {
        return DB::table('reviews')->where('id', $id)->first();
    }

    /*
     * Čia hardcoras, bet long story short, tai
     * Pirmiausia sutvarko objektų reviews'ų lentą,
     * Ją prijungia prie antrojo querio,
     * Antrasis query sutvarko reviews'ų lentą,
     * Gaunamas objekų reviews'ų ir reviews'ų mišinukas,
     * Jis returninamas kur bus prijungtas prie kito querio.
     */
    public static function getReviewScoreJoin()
    {
        //First query
        $select1 = 'park_id, 
            avg(score) as avg_objects_score, 
            count(object_id) as objects_count';

        $template = DB::raw("(SELECT " . $select1 . " FROM review_objects GROUP BY park_id) as review_objects");

        //Second querry
        $select2 = 'reviews.park_id, 
            avg(cable_system_score) as cable_score_avg,       
            avg(water_score) as water_score_avg,               
            avg(surroundings_score) as surroundings_score_avg, 
            avg(staff_score) as staff_score_avg,  
            review_objects.avg_objects_score,
            review_objects.objects_count,
            ((avg(cable_system_score) + avg(water_score) + avg(surroundings_score) + avg(staff_score) + IFNULL(review_objects.avg_objects_score,0)) / 5) as review_score';

        return DB::raw("(SELECT " . $select2 . " 
            FROM reviews 
            LEFT JOIN " . $template . " ON reviews.park_id = review_objects.park_id
            GROUP BY reviews.park_id) as reviews");
    }
}