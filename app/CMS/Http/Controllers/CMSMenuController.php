<?php
/**
 * Created by PhpStorm.
 * User: nfiss
 * Date: 2017-07-01
 * Time: 00:23
 */

namespace App\CMS\Http\Controllers;

use App\Http\Controllers\Controller;

class CMSMenuController extends Controller
{
    public function getMenu()
    {
        return view('cms::menu');
    }
}