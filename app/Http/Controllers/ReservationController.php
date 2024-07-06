<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Araclar;
use App\Models\EkOzellik;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function postRezervasyon(Request $request)
    {
        $data = $request->json()->all();

        session(['rezervasyon' => $data]);

        return response()->json(['success' => true, 'message' => 'Reservation successfully submitted']);
    }

    public function listele()
    {
        $rezervasyon = session('rezervasyon');

        $araclar = Araclar::where('arac_durum', '0')->get();
        $arac_markalari = Araclar::select('arac_marka')->distinct()->get();
        $arac_yakit = Araclar::select('arac_yakit')->distinct()->get();
        $arac_vites = Araclar::select('arac_vites')->distinct()->get();

        return view('frontend.arabalar.araclar', compact('araclar', 'rezervasyon', 'arac_markalari', 'arac_yakit', 'arac_vites'));
    }

    public function EkOzellikler(Request $request)
    {
        $rezervasyon = session('rezervasyon');
        $aracId = $request->input('arac_id');

        $arac = Araclar::find($aracId);

        $alisTarihi = Carbon::parse($rezervasyon['alis_tarihi']);
        $teslimTarihi = Carbon::parse($rezervasyon['teslim_tarihi']);
        $kiralamaGunSayisi = $alisTarihi->diffInDays($teslimTarihi);

        $paketler = EkOzellik::find(1);

        $price = $arac->arac_fiyat * $kiralamaGunSayisi;
        $genc_surucu = $paketler->genc_surucu * $kiralamaGunSayisi;
        $ek_surucu = $paketler->ek_surucu * $kiralamaGunSayisi;
        $cocuk_koltugu = $paketler->cocuk_koltugu * $kiralamaGunSayisi;

        return view('frontend.rezervasyon.ek_ozellikler', compact('price', 'arac', 'rezervasyon', 'kiralamaGunSayisi', 'genc_surucu', 'ek_surucu', 'cocuk_koltugu'));
    }

    public function postEkOzellikler(Request $request)
    {
        try {
            $data = $request->json()->all();

            session(['ek_ozellikler' => $data]);

            return response()->json(['success' => true, 'message' => 'Ek özellikler başarıyla kaydedildi', 'arac_id' => $data['arac_id']]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function getSessionData()
    {
        $ekOzellikler = session('ek_ozellikler', []);
        return response()->json($ekOzellikler);
    }

    public function GuvencePaketleri(Request $request)
    {
        $rezervasyon = session('rezervasyon');
        $ekOzellikler = session('ek_ozellikler', []);
        $aracId = $request->input('arac_id');
        $arac = Araclar::find($aracId);

        $alisTarihi = Carbon::parse($rezervasyon['alis_tarihi']);
        $teslimTarihi = Carbon::parse($rezervasyon['teslim_tarihi']);
        $kiralamaGunSayisi = $alisTarihi->diffInDays($teslimTarihi);

        $paketler = EkOzellik::find(1);

        $price = $arac->arac_fiyat * $kiralamaGunSayisi;
        $mini_paket = $paketler->mini_paket;
        $orta_paket = $paketler->orta_paket;
        $tam_paket = $paketler->tam_paket;

        $totalPrice = $ekOzellikler['total_price'] ?? $price;

        $genc_surucu = $ekOzellikler['genc_surucu'] ?? 0;
        $ek_surucu = $ekOzellikler['ek_surucu'] ?? 0;
        $cocuk_koltugu = $ekOzellikler['cocuk_koltugu'] ?? 0;

        return view('frontend.rezervasyon.guvence_paketleri', compact('totalPrice', 'mini_paket', 'orta_paket', 'tam_paket', 'price', 'arac', 'rezervasyon', 'kiralamaGunSayisi', 'alisTarihi', 'teslimTarihi', 'genc_surucu', 'ek_surucu', 'cocuk_koltugu'));
    }

    public function postGuvencePaketleri(Request $request)
    {
        $ekOzellikler = session('ek_ozellikler', []);

        $guvencePaketleri = [
            'mini_paket' => $request->input('mini_paket', 0),
            'orta_paket' => $request->input('orta_paket', 0),
            'tam_paket' => $request->input('tam_paket', 0),
            'total_price' => $request->input('total_price', 0),
        ];

        $ekOzellikler = array_merge($ekOzellikler, $guvencePaketleri);
        session(['ek_ozellikler' => $ekOzellikler]);

        return redirect()->route('odemeBilgileri');
    }

}
