<?php
/**
 * Created by PhpStorm.
 * User: nfiss
 * Date: 2017-07-01
 * Time: 21:40
 */

namespace App\CMS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
        public function authorize () {
            return true;
        }

        public function rules() {
            return [
                'email' => 'email|required',
                'password' => 'required'
            ];
        }

        public function messages() {
            return [
                'email.email' => trans('admin_validation.email_format'),
                'email.required' => trans('admin_validation.email_required'),
                'password.required' => trans('admin_validation.password_required'),
            ];
        }
}