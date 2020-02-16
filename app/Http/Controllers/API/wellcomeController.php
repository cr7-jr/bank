<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class wellcomeController extends Controller
{
    public function check($idBank, $idNumber)
    {
        $uesr = User::find($idBank);

        if ($uesr != null && $uesr->id_number == $idNumber) {
            return response()->json(true);
        }
        return response()->json(false);
    }
}
