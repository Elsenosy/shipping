<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAirRequest;
use App\Http\Requests\StoreCustomRequest;
use App\Http\Requests\StoreSeaRequest;
use App\Models\AirRequest;
use App\Models\CustomRequest;
use App\Models\MaritimeRequest;
use App\Models\PriceRequest;
use Exception;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function storeSeaRequest(StoreSeaRequest $request)
    {
        try {
            $data = $request->validated();

            // Make a transaction to save the whole data together 
            \DB::transaction(function () use ($data) {
                $request = new PriceRequest();
                $request->company_name = $data['company_name'];
                $request->company_address = $data['company_address'];
                $request->name = $data['name'];
                $request->email = $data['email'];
                $request->phone = $data['phone'];
                $request->type = 'sea';
                $request->save();

                $seaRequest = new MaritimeRequest();
                $seaRequest->request_id = $request->id;
                $seaRequest->payload_seaport = $data['payload_seaport'];
                $seaRequest->arrival_seaport = $data['arrival_seaport'];
                $seaRequest->goods_type = $data['goods_type'];
                $seaRequest->container_type_id = $data['container_type_id'];
                $seaRequest->weight = $data['weight'];
                $seaRequest->count = $data['count'];
                $seaRequest->ready_date = $data['ready_date'];
                $seaRequest->save();
            });

            return back()->withSuccess(trans('app.saved'));
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }


    public function storeAirRequest(StoreAirRequest $request)
    {
        try {
            $data = $request->validated();

            // Make a transaction to save the whole data together 
            \DB::transaction(function () use ($data) {
                $request = new PriceRequest();
                $request->company_name = $data['company_name'];
                $request->company_address = $data['company_address'];
                $request->name = $data['name'];
                $request->email = $data['email'];
                $request->phone = $data['phone'];
                $request->type = 'air';
                $request->save();

                $airRequest = new AirRequest();
                $airRequest->request_id = $request->id;
                $airRequest->payload_address = $data['payload_address'];
                $airRequest->payload_airport = $data['payload_airport'];
                $airRequest->arrival_address = $data['arrival_address'];
                $airRequest->arrival_airport = $data['arrival_airport'];
                $airRequest->goods_type = $data['goods_type'];
                $airRequest->weight = $data['weight'];
                $airRequest->units_count = $data['units_count'];
                $airRequest->ready_date = $data['ready_date'];
                $airRequest->length = $data['length'];
                $airRequest->height = $data['height'];
                $airRequest->width = $data['width'];
                $airRequest->save();
            });

            return back()->withSuccess(trans('app.saved'));
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    public function storeCustomRequest(StoreCustomRequest $request)
    {
        try {
            $data = $request->validated();

            // Make a transaction to save the whole data together 
            \DB::transaction(function () use ($data) {
                $request = new PriceRequest();
                $request->company_name = $data['company_name'];
                $request->company_address = $data['company_address'];
                $request->name = $data['name'];
                $request->email = $data['email'];
                $request->phone = $data['phone'];
                $request->type = 'custom';
                $request->save();

                $customRequest = new CustomRequest();
                $customRequest->request_id = $request->id;
                $customRequest->payload_address = $data['payload_address'];
                $customRequest->payload_place = $data['payload_place'];
                $customRequest->weight = $data['weight'];
                $customRequest->container_type_id = $data['container_type_id'];
                $customRequest->custom_type_id = $data['custom_type_id'];
                $customRequest->count = $data['count'];
                $customRequest->ready_date = $data['ready_date'];
                $customRequest->save();
            });

            return back()->withSuccess(trans('app.saved'));
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
