<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAirRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'company_name' => 'required|string|min:3|max:220',
            'company_address' => 'required|string|min:3|max:220',
            'name' => 'required|string|min:3|max:220',
            'email' => 'required|email|min:3|max:220',
            'phone' => 'required|numeric|digits:10',
            'payload_address' => 'required|string|min:3|max:220',
            'payload_airport' => 'required|string|min:3|max:220',
            'arrival_address' => 'required|string|min:3|max:220',
            'arrival_airport' => 'required|string|min:3|max:220',
            'goods_type' => 'required|string|min:3|max:220',
            'weight' => 'required|numeric',
            'units_count' => 'required|numeric',
            'ready_date' => 'required|date|after:today',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'company_name' => trans('app.company_name'),
            'company_address' => trans('app.company_address'),
            'name' => trans('app.name'),
            'email' => trans('app.email'),
            'phone' => trans('app.phone'),
            'payload_address' => trans('app.payload_address'),
            'payload_airport' => trans('app.payload_airport'),
            'arrival_address' => trans('app.arrival_address'),
            'arrival_airport' => trans('app.arrival_airport'),
            'goods_type' => trans('app.goods_type'),
            'weight' => trans('app.weight'),
            'units_count' => trans('app.units_count'),
            'ready_date' => trans('app.ready_date'),
            'length' => trans('app.length'),
            'height' => trans('app.height'),
            'width' => trans('app.width'),
        ];
    }
}
