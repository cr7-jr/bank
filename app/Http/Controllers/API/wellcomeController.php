<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\receipt;
use App\User;
use Illuminate\Http\Request;

class wellcomeController extends Controller
{
    public function getAccountInformation(User $id_bank)
    {
        return \response()->json($id_bank->balance);
    }
    public function checkRegister($idBank, $idNumber)
    {
        $uesr = User::find($idBank);

        if ($uesr != null && $uesr->id_number == $idNumber) {
            return response()->json(true);
        }
        return response()->json(false);
    }
    public function checkInformation(User $user, $value, Request $request)
    {


        if ($user->balance >= $value) {

            $user->balance = $user->balance - $value;
            $user->save();
            $receipt = receipt::create([
                'number' => $request->number,
                'course_number' => $request->course_number,
                'name_payment' => $user->first_name . $user->last_name,
                'value' => $value,
                'relase_date' => now(),
                'bill_type' => $request->bill_type,
                'bank_id' => $user->id
            ]);
            return \response()->json([true, $receipt->id]);
        }
        return \response()->json(false);
    }
    public function Complete_the_payment(User $user, $number, $course_number)
    {
    }
}
