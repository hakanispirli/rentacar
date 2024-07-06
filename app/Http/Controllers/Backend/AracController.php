<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Araclar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Imagick\Driver as ImagickDriver;

class AracController extends Controller
{
    public function Araclar()
    {
        $araclar = Araclar::latest()->paginate(7);
        return view('backend.araclar.araclar', compact('araclar'));
    }

    public function AraclarEkle()
    {
        return view('backend.araclar.arac_ekle');
    }

    public function AraclarEkleAction(Request $request)
    {
        $save_url = null;

        if ($request->file('arac_gorsel')) {
            $image = $request->file('arac_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['arac_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['arac_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/araclar/' . $imageName));
                $save_url = 'upload/araclar/' . $imageName;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['arac_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        $araclar = new Araclar();
        $araclar->arac_adi = $request->input('arac_adi');
        $araclar->arac_vites = $request->input('arac_vites');
        $araclar->arac_yakit = $request->input('arac_yakit');
        $araclar->arac_depozito = $request->input('arac_depozito');
        $araclar->arac_kapasite = $request->input('arac_kapasite');
        $araclar->arac_yas_siniri = $request->input('arac_yas_siniri');
        $araclar->arac_km_limiti = $request->input('arac_km_limiti');
        $araclar->arac_sinif = $request->input('arac_sinif');
        $araclar->arac_marka = $request->input('arac_marka');
        $araclar->arac_plaka = $request->input('arac_plaka');
        $araclar->arac_fiyat = $request->input('arac_fiyat');
        $araclar->arac_gorsel = $save_url;
        $araclar->created_at = Carbon::now()->locale('tr_TR');
        $araclar->save();

        $notification = array(
            'message' => 'İşlem Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.araclar')->with($notification);
    }

    public function AraclarDuzenle($id)
    {
        $araclar = Araclar::find($id);
        return view('backend.araclar.arac_duzenle', compact('araclar'));
    }

    public function AraclarDuzenleAction(Request $request)
    {
        $arac_id = $request->input('id');
        $araclar = Araclar::findOrFail($arac_id);

        // Görsel yüklenmiş mi kontrolü
        if ($request->file('arac_gorsel')) {
            $image = $request->file('arac_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['arac_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['arac_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/araclar/' . $imageName));
                $save_url = 'upload/araclar/' . $imageName;

                // Eski görseli silme işlemi
                if ($araclar->arac_gorsel && file_exists(public_path($araclar->arac_gorsel))) {
                    unlink(public_path($araclar->arac_gorsel));
                }

                // Yeni görsel URL'sini kaydet
                $araclar->arac_gorsel = $save_url;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['arac_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        // Diğer araç bilgilerini güncelleme
        $araclar->arac_adi = $request->input('arac_adi');
        $araclar->arac_vites = $request->input('arac_vites');
        $araclar->arac_yakit = $request->input('arac_yakit');
        $araclar->arac_depozito = $request->input('arac_depozito');
        $araclar->arac_kapasite = $request->input('arac_kapasite');
        $araclar->arac_yas_siniri = $request->input('arac_yas_siniri');
        $araclar->arac_km_limiti = $request->input('arac_km_limiti');
        $araclar->arac_sinif = $request->input('arac_sinif');
        $araclar->arac_marka = $request->input('arac_marka');
        $araclar->arac_plaka = $request->input('arac_plaka');
        $araclar->arac_fiyat = $request->input('arac_fiyat');
        $araclar->updated_at = Carbon::now()->locale('tr_TR');
        $araclar->save();

        $notification = array(
            'message' => 'Düzenleme Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.araclar')->with($notification);
    }

    public function AraclarSil($id)
    {
        $item = Araclar::find($id);

        if ($item->arac_gorsel && file_exists(public_path($item->arac_gorsel))) {
            unlink(public_path($item->arac_gorsel));
        }

        Araclar::find($id)->delete();

        $notification = array(
            'message' => 'Araç Başarılı Şekilde Silindi.',
            'alert-type' =>'success'
        );
        return redirect()->route('admin.araclar')->with($notification);
    }

    public function AracDurumu(Request $request)
    {
        $request->validate([
            'arac_id' => 'required|exists:araclars,id',
            'arac_durum' => 'required|in:0,1,2',
        ]);

        // Find the vehicle by its ID
        $arac = Araclar::find($request->arac_id);

        // Update the vehicle status
        $arac->arac_durum = $request->arac_durum;
        $arac->save();

        // Return success response
        return response()->json([
            'status' => 'success',
            'message' => 'Araç durumu güncellendi.'
        ]);
    }
}


