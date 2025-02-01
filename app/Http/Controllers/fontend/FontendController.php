<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterInfo;
use Illuminate\Support\Facades\Auth;

class FontendController extends Controller
{
    public function FormOne()
    {
        return view('fontend.form_one');
    }
    public function FormTwo()
    {
        return view('fontend.form_two');
    }
    public function FormThree()
    {
        return view('fontend.form_three');
    }
    public function FormFour()
    {
        return view('fontend.form_four');
    }
    public function PdfText()
    {
        $user = Auth::user();
        // Fetch the user's data from RegisterInfo
        $data = RegisterInfo::where('user_id', $user->id)->get();
        return view('fontend.pdf_text',compact('data'));
    }

    public function PaymentPage()
    {
        return view('fontend.payment');
    }
}