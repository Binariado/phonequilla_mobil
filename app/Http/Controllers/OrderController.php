<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      
        $arrayparam= array (
            'language' => 'es',
            'command' => 'SUBMIT_TRANSACTION',
            'merchant' => 
            array (
              'apiKey' => 'SYbtxLQF5nUvMJr1YvqCctAbEs',
              'apiLogin' => 'R7Ar93GA5PWhJyJ',
            ),
            'transaction' => 
            array (
              'order' => 
              array (
                'accountId' => '512321',
                'referenceCode' => 'TestPayU',
                'description' => 'payment test',
                'language' => 'es',
                'signature' => '7ee7cf808ce6a39b17481c54f2c57acc',
                'notifyUrl' => 'http://www.tes.com/confirmation',
                'additionalValues' => 
                array (
                  'TX_VALUE' => 
                  array (
                    'value' => 20000,
                    'currency' => 'COP',
                  ),
                  'TX_TAX' => 
                  array (
                    'value' => 3193,
                    'currency' => 'COP',
                  ),
                  'TX_TAX_RETURN_BASE' => 
                  array (
                    'value' => 16806,
                    'currency' => 'COP',
                  ),
                ),
                'buyer' => 
                array (
                  'merchantBuyerId' => '1',
                  'fullName' => 'First name and second buyer  name',
                  'emailAddress' => 'buyer_test@test.com',
                  'contactPhone' => '7563126',
                  'dniNumber' => '5415668464654',
                  'shippingAddress' => 
                  array (
                    'street1' => 'calle 100',
                    'street2' => '5555487',
                    'city' => 'Medellin',
                    'state' => 'Antioquia',
                    'country' => 'CO',
                    'postalCode' => '000000',
                    'phone' => '7563126',
                  ),
                ),
                'shippingAddress' => 
                array (
                  'street1' => 'calle 100',
                  'street2' => '5555487',
                  'city' => 'Medellin',
                  'state' => 'Antioquia',
                  'country' => 'CO',
                  'postalCode' => '0000000',
                  'phone' => '7563126',
                ),
              ),
              'payer' => 
              array (
                'merchantPayerId' => '1',
                'fullName' => 'First name and second payer name',
                'emailAddress' => 'payer_test@test.com',
                'contactPhone' => '7563126',
                'dniNumber' => '5415668464654',
                'billingAddress' => 
                array (
                  'street1' => 'calle 93',
                  'street2' => '125544',
                  'city' => 'Bogota',
                  'state' => 'Bogota DC',
                  'country' => 'CO',
                  'postalCode' => '000000',
                  'phone' => '7563126',
                ),
              ),
              'creditCard' => 
              array (
                'number' => '4097440000000004',
                'securityCode' => '321',
                'expirationDate' => '2020/12',
                'name' => 'REJECTED',
              ),
              'extraParameters' => 
              array (
                'INSTALLMENTS_NUMBER' => 1,
              ),
              'type' => 'AUTHORIZATION_AND_CAPTURE',
              'paymentMethod' => 'VISA',
              'paymentCountry' => 'CO',
              'deviceSessionId' => 'vghs6tvkcle931686k1900o6e1',
              'ipAddress' => '127.0.0.1',
              'cookie' => 'pt1t38347bs6jc9ruv2ecpv7o2',
              'userAgent' => 'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0',
            ),
            'test' => false,
          );

      



       

    
        $data=json_encode($arrayparam);

        $client = new Client([
            'headers' => ['Content-Type' => 'application/json'],
            'base_uri' => env('API_ENDPOINT'),
        ]);
        $response  = $client->post(env('API_ENDPOINT'),
        ['body' => $data]
        );

      
        $response = simplexml_load_string($response->getBody()->getContents());
        $response=json_encode($response);

        dd($response);

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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
