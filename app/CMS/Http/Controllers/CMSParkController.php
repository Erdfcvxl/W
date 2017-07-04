<?php
/**
 * Created by PhpStorm.
 * User: nfiss
 * Date: 2017-07-02
 * Time: 19:47
 */

namespace App\CMS\Http\Controllers;

use App\CMS\Models\Parks;
use App\Http\Controllers\Controller;
use App\Models\Park;
use App\Services\ParkService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CMSParkController extends Controller
{
    private $parkService;

    public function __construct(ParkService $parkService)
    {
        $this->parkService = $parkService;
    }

    public function getEdit()
    {
        //TODO: sutvarkyt kad loadintu pagal id ir auth parkus
        $data = getLoggedPark();
        return view('cms::park', [
            'formItem' => $data
        ]);
    }

    public function putUpdate($park_id, Request $request) {
        //dd($park);
        $this->parkService->updatePark($park_id, $request->all());
        return redirect(route('cms.park.edit', getLoggedPark()->id))->with(['flashMessage', trans('admin_flash.successful_edit')]);
    }
}