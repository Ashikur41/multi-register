<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterInfo;
use Illuminate\Support\Facades\Auth;

class RegisterInfoController extends Controller
{
    public function RegisterInfo(Request $request)
    {
        $data =new RegisterInfo();
        $data->user_id=Auth::id();
        $data->fast_name=$request->fast_name;
        $data->last_name=$request->last_name;
        $data->father_name=$request->father_name;
        $data->mother_name=$request->mother_name;
        $data->save();

        return redirect(route('pdf.text', ['id' => $data->id]));
    }
}