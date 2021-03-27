<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeaRequest extends FormRequest
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
            'payload_seaport' => 'required|string|min:5|max:220',
            'arrival_seaport' => 'required|string|min:5|max:220',
            'goods_type' => 'required|string|min:5|max:220',
            'container_type_id' => 'required|exists:container_types,id',
            'weight' => 'required|numeric',
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
            'payload_seaport' => trans('app.payload_seaport'),
            'arrival_seaport' => trans('app.arrival_seaport'),
            'goods_type' => trans('app.goods_type'),
            'container_type_id' => trans('app.container_type_id'),
            'weight' => trans('app.weight'),
            'count' => trans('app.count'),
            'ready_date' => trans('app.ready_date'),
        ];
    }
}
