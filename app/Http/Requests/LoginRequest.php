<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'mobile' => 'required|digits:10'
        ];
    }

   
    // public function getPhone()
    // {
       
    //     $phone = $this->get('phone');

    //     if ($this->isPhone($phone)) {
    //         return [
    //             'email' => $phone
    //         ];
    //     }

    //     return $this->only('phone');
    // }

   
    // private function isPhone($param)
    // {
    //     $factory = $this->container->make(ValidationFactory::class);

    //     return ! $factory->make(
    //         ['phone' => $param],
    //         ['phone' => 'phone']
    //     )->fails();
    // }
}
