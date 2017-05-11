<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    protected $fillable = [
        'id', 'name', 'surname', 'email', 'phone_number'
    ];
    protected $table = 'temp_users';

    public function getTempUser($id) {
        return DB::table('temp_users')->where('id', $id)->first();
    }
}