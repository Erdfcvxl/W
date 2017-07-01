<?php

namespace App\Http\Controllers;

use App\Models\Park;
use App\Services\ParkService;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    private $view_path = "public.park.";
    /**
     * @var ParkService
     */
    private $parkService;

    public function __construct(ParkService $parkService)
    {
        $this->parkService = $parkService;
    }

    public function getList()
    {

        $parkFilter = new Park();
        $districts  = $this->parkService->getAvailableDistricts();

        return view($this->view_path . "list", [
            'parkFilter' => $parkFilter,
            'districts'  => $districts
        ]);
    }

    public function postList(Request $request)
    {
        $park = new Park($request->all());
        $parkService = new ParkService($park);
        $parkService->setSort($request->all());

        return response()->view($this->view_path . "_list", [
            'parks' => $parkService->getParksListItems()
        ]);
    }
}
