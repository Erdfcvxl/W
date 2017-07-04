<?php

namespace App\CMS\Http\Controllers;

use App\CMS\Http\Requests\LoginRequest;
use App\CMS\Services\ParkStaffService;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CMSLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';
    protected $loginPath = '/admin/login';

    private $parkStaffService;

    public function __construct(ParkStaffService $parkStaffService)
    {
        $this->parkStaffService = $parkStaffService;
    }

    public function getLogin()
    {
        return view('cms::login');
    }

    public function postAuthenticate(LoginRequest $request)
    {
        $email = $request->input('email');
        $password =  $request->input('password');
        if (Auth::attempt([
                              'email'    => $email,
                              'password' => $password,
                          ])
        ) {
            return redirect()->route('cms.dashboard.index');
        } else {
            Session::flash('custErrors', trans('admin_page.failed_login'));
            return redirect()->back();

        }
    }

    public function getLogout () {
        Auth::logout();
        return redirect()->route('login');
    }
}
