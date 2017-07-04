<?php
/**
 * Created by PhpStorm.
 * User: nfiss
 * Date: 2017-07-01
 * Time: 23:04
 */

namespace App\CMS\Services;

use App\CMS\Models\ParkStaff;

class ParkStaffService
{

    /**
     * @var ParkStaff
     */
    private $parkStaff;

    public function __construct(ParkStaff $parkStaff)
    {
        $this->parkStaff = $parkStaff;

    }

    public function isStaffMember ($currentUser) {
        if (!empty($currentUser->parkStaff->park_id)){
            return true;
        }
        return false;
    }

}