<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('fontend.pdf_text');
    }
}
