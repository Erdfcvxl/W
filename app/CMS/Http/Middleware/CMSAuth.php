<?php

namespace App\CMS\Http\Middleware;

use App\CMS\Services\ParkStaffService;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CMSAuth
{

    public function __construct(ParkStaffService $parkStaffService)
    {
        $this->parkStaffService = $parkStaffService;
    }

    public function handle($request, Closure $next)
    {
        $currUser = $request->user();

        if(!Auth::check($currUser)){
            return redirect()->route('login');
        }

        if (!$this->parkStaffService->isStaffMember($currUser)) {
            Session::flash('custErrors', trans('admin_flash.unauthorized_login'));
            return redirect()->route('landingPage');
        }

        return $next($request);
    }
}
