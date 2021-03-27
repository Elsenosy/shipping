<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomRequest extends FormRequest
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
            'payload_place' => 'required|string|min:3|max:220',
            'weight' => 'required|numeric',
            'container_type_id' => 'required|exists:container_types,id',
            'custom_type_id' => 'required|exists:custom_types,id',
            'count' => 'required|numeric',
            'ready_date' => 'required|date|after:today',
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
            'payload_place' => trans('app.payload_place'),
            'weight' => trans('app.weight'),
            'container_type_id' => trans('app.container_type_id'),
            'custom_type_id' => trans('app.custom_type_id'),
            'count' => trans('app.count'),
            'ready_date' => trans('app.ready_date'),
        ];
    }
}
