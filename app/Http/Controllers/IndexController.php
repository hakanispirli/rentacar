<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\faq;
use App\Models\Araclar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function Index()
    {
        return view('frontend.home');
    }

    public function SSS()
    {
        $faq = faq::latest()->get();
        return view('frontend.pages.sss',compact('faq'));
    }

    public function Iletisim()
    {
        return view('frontend.pages.iletisim');
    }

    public function Kurumsal()
    {
        return view('frontend.pages.kurumsal');
    }

    public function OdemeBilgileri()
    {
        return view('frontend.rezervasyon.odeme_bilgileri');
    }
}
