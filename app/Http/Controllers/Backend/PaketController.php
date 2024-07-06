<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\EkOzellik;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class PaketController extends Controller
{
    public function AdminPaketler()
    {
        $paketler = EkOzellik::find(1);
        return view('backend.paketler.paketler',compact('paketler'));
    }

    public function AdminPaketlerAction(Request $request)
    {
        $paketler = EkOzellik::find(1);
        $paketler->mini_paket = $request->input('mini_paket');
        $paketler->orta_paket = $request->input('orta_paket');
        $paketler->tam_paket = $request->input('tam_paket');
        $paketler->genc_surucu = $request->input('genc_surucu');
        $paketler->ek_surucu = $request->input('ek_surucu');
        $paketler->cocuk_koltugu = $request->input('cocuk_koltugu');
        $paketler->save();

        $notification = array(
            'message' => 'Paket Bilgileri Kaydedildi',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.paketler')->with($notification);

    }
}
