<?php

namespace App\Http\Controllers;

use App\Order_item;
use Illuminate\Http\Request;
use App;
use GuzzleHttp;
use GuzzleHttp\Middleware;
class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $client = new GuzzleHttp\Client(['headers'=>['Content-type'=>'application/json']]);

        $res = $client->request('POST', 'https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi', [
            'json'=>[
            'test' =>false,
            'language'=>"en",
            'command'=>"ORDER_DETAIL",
            'merchant'=>[
                'apiLogin'=> "pRRXKOl8ikMmt9u",
                'apiKey'=> "4Vj8eK4rloUd272L48hsrarnUA"
            ],
            'details'=>['details'=>2637540]
            ]

        ]);

        dd($res->getBody()->getContents());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function show(Order_item $order_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_item $order_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_item $order_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_item  $order_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_item $order_item)
    {
        //
    }
}
