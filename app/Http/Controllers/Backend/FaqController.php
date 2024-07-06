<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Colors\Rgb\Channels\Red;

class FaqController extends Controller
{
    public function AdminFaq()
    {
        $faq = faq::latest()->paginate(5);
        return view('backend.faq.faq',compact('faq'));
    }

    public function AdminFaqEkle()
    {
        return view('backend.faq.faq_add');
    }

    public function AdminFaqEkleAction(Request $request)
    {
        $faq = new faq();
        $faq->faq_baslik = $request->input('faq_baslik');
        $faq->faq_aciklama = $request->input('faq_aciklama');
        $faq->created_at = Carbon::now()->locale('tr_TR');

        $faq->save();

        $notification = array(
            'message' => 'İşlem Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.faq')->with($notification);
    }

    public function AdminFaqDuzenle($id)
    {
        $faq = faq::find($id);
        return view('backend.faq.faq_edit',compact('faq'));
    }

    public function AdminFaqDuzenleAction(Request $request)
    {
        $faq_id = $request->input('id');
        $faq = faq::findOrFail($faq_id);

        $faq->faq_baslik = $request->input('faq_baslik');
        $faq->faq_aciklama = $request->input('faq_aciklama');
        $faq->updated_at = Carbon::now()->locale('tr_TR');
        $faq->save();

        $notification = array(
            'message' => 'İşlem Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.faq')->with($notification);
    }

    public function AdminFaqSil($id)
    {
        $item = faq::find($id);
        faq::find($id)->delete();

        $notification = array(
            'message' => 'S.S.S. Başarılı Şekilde Silindi.',
            'alert-type' =>'success'
        );
        return redirect()->route('admin.faq')->with($notification);
    }
}
