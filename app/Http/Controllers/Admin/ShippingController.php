<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceRequest;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    private $view = 'admin.requests.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = PriceRequest::latest('id')->paginate(8);
        return view($this->view.'index', compact('requests'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = PriceRequest::findOrFail($id);

        if($request){
            if(!$request->isSeen()){
                $request->markAsSeen();
            }
        }
        
        return view($this->view.'show', compact('request'));
    }

}
