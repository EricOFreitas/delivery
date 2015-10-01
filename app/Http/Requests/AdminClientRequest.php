<?php

namespace Delivery\Http\Requests;


class AdminClientRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required',
            'address' => 'required'
        ];
    }
}