<?php

namespace App\Http\Controllers;

use App\Modules\Park\Park;
use App\Modules\Park\ParkService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkController extends Controller
{
    private $view_path = "public.park.";

    public function getList()
    {
        $parkFilter = new Park();

        return view($this->view_path . "list", [
            'parkFilter' => $parkFilter
        ]);
    }

    public function postList(Request $request)
    {
        $park = new Park($request->all());
        $parkService = new ParkService($park);
        $parkService->setSort($request->all());

        return response()->view($this->view_path . "_list", [
            'parks' => $parkService->getParks()
        ]);
    }
}
