<?php


namespace App\Http\Controllers;


use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getReviews() {
        $reviews = Review::orderBy('updated_at', 'desc')->get();
        return view('reviews', ['reviews' => $reviews]);
    }

    public function getParkReviews($park_id) {
        $reviews = Review::orderBy('updated_at', 'desc')->where('park_id', $park_id)->get();
        return view('park.reviews', ['reviews' => $reviews]);
    }

    public function getReview($id) {
        $review = Review::where('id', $id)->first();
        return view('review', ['review' => $review]);
    }

    public function getCreateReview(){
        return view('createReview');
    }

    public function getEditReview($id){
        $review = Review::find($id);
        return view('editReview', ['review' => $review]);
    }

    public function getDeleteReview($id) {
        $review = Review::find($id);
        $review->delete();
        return view('reviews')->with('info', 'review deleted');
    }

    public function postCreateReview(Request $request) {
        $this->validate($request, [
            'park_id' => 'required',
            'user_id' => 'required',
            'object_id' => 'required',
            'value' => 'required',
            'description' => 'required'
        ]);

        $review = new Event([
            'park_id' => $request->input('park_id'),
            'user_id' => getLoggedUser()->id,
            'object_id' => $request->input('object_id'),
            'value' => $request->input('value'),
            'description' => $request->input('description')
        ]);

        $review->save();

        return redirect()->route('reviews')->with('info', 'Review created');
    }

    public function postEditReview(Request $request) {
        $this->validate($request, [
            'park_id' => 'required',
            'user_id' => 'required',
            'object_id' => 'required',
            'value' => 'required',
            'description' => 'required'
        ]);

        $review = Review::find($request->input('id'));
        $review->park_id = $request->input('park_id');
        $review->object_id = $request->input('object_id');
        $review->value = $request->input('value');
        $review->description = $request->input('description');
        $review->save();

        return redirect()->route('reviews')->with('info', 'Review edited.');
    }
}