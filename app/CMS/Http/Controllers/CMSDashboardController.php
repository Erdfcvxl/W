<?php
/**
 * Created by PhpStorm.
 * User: nfiss
 * Date: 2017-07-04
 * Time: 21:46
 */

namespace App\CMS\Http\Controllers;

use App\Http\Controllers\Controller;

class CMSDashboardController extends Controller
{
    public function getDashboard()
    {
        return view('cms::dashboard');
    }
}