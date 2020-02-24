<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\receipt;
use Illuminate\Http\Request;

class receiptController extends Controller
{

    public function index()
    {
        //
    } //end index

    public function show(receipt $receipt)
    {
        return \response()->json([
            'data' => $receipt,
            'code' => '200',
        ]);
    } //end show

}
