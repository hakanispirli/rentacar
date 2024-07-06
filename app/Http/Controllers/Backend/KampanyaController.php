<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Kampanyalar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class KampanyaController extends Controller
{
    public function AdminKampanyalar()
    {
        $kampanyalar = Kampanyalar::latest()->get();
        return view('backend.kampanyalar.kampanyalar',compact('kampanyalar'));
    }

    public function AdminKampanyalarEkle()
    {
        return view('backend.kampanyalar.kampanya_ekle');
    }

    public function AdminKampanyalarEkleAction(Request $request)
    {
        $save_url = null;

        if ($request->file('kampanya_gorsel')) {
            $image = $request->file('kampanya_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/kampanyalar/' . $imageName));
                $save_url = 'upload/kampanyalar/' . $imageName;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        $kampanyalar = new Kampanyalar();
        $kampanyalar->kampanya_baslik = $request->input('kampanya_baslik');
        $kampanyalar->kampanya_aciklama = $request->input('kampanya_aciklama');
        $kampanyalar->kampanya_gorsel = $save_url;
        $kampanyalar->created_at = Carbon::now()->locale('tr_TR');
        $kampanyalar->save();

        $notification = array(
            'message' => 'İşlem Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.kampanyalar')->with($notification);
    }

    public function AdminKampanyalarDuzenle($id)
    {
        $kampanyalar = Kampanyalar::find($id);
        return view('backend.kampanyalar.kampanya_duzenle', compact('kampanyalar'));
    }

    public function AdminKampanyalarDuzenleAction(Request $request)
    {
        $kampanya_id = $request->input('id');
        $kampanyalar = Kampanyalar::findOrFail($kampanya_id);

        if ($request->file('kampanya_gorsel')) {
            $image = $request->file('kampanya_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/kampanyalar/' . $imageName));
                $save_url = 'upload/kampanyalar/' . $imageName;

                if ($kampanyalar->kampanya_gorsel && file_exists(public_path($kampanyalar->kampanya_gorsel))) {
                    unlink(public_path($kampanyalar->kampanya_gorsel));
                }

                $kampanyalar->kampanya_gorsel = $save_url;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['kampanya_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        // Diğer araç bilgilerini güncelleme
        $kampanyalar->kampanya_baslik = $request->input('kampanya_baslik');
        $kampanyalar->kampanya_aciklama = $request->input('kampanya_aciklama');
        $kampanyalar->updated_at = Carbon::now()->locale('tr_TR');
        $kampanyalar->save();

        $notification = array(
            'message' => 'Düzenleme Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.kampanyalar')->with($notification);
    }

    public function AdminKampanyalarSil($id)
    {
        $item = Kampanyalar::find($id);

        if ($item->kampanya_gorsel && file_exists(public_path($item->kampanya_gorsel))) {
            unlink(public_path($item->kampanya_gorsel));
        }

        Kampanyalar::find($id)->delete();

        $notification = array(
            'message' => 'Kampanya Başarılı Şekilde Silindi.',
            'alert-type' =>'success'
        );
        return redirect()->route('admin.kampanyalar')->with($notification);
    }
}
