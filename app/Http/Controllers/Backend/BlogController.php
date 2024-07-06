<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    public function AdminBlog()
    {
        $blog = Blog::latest()->paginate(5);
        return view('backend.blog.blog',compact('blog'));
    }

    public function AdminBlogEkle()
    {
        return view('backend.blog.blog_ekle');
    }

    public function AdminBlogEkleAction(Request $request)
    {
        $save_url = null;

        if ($request->file('blog_gorsel')) {
            $image = $request->file('blog_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['blog_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['blog_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/blog/' . $imageName));
                $save_url = 'upload/blog/' . $imageName;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['blog_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        $blog = new Blog();
        $blog->blog_baslik = $request->input('blog_baslik');
        $blog->blog_aciklama = $request->input('blog_aciklama');
        $blog->blog_gorsel = $save_url;
        $blog->created_at = Carbon::now()->locale('tr_TR');
        $blog->save();

        $notification = array(
            'message' => 'İşlem Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.blog')->with($notification);
    }

    public function AdminBlogDuzenle($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.blog_duzenle', compact('blog'));
    }

    public function AdminBlogDuzenleAction(Request $request)
    {
        $blog_id = $request->input('id');
        $blog = Blog::findOrFail($blog_id);

        if ($request->file('blog_gorsel')) {
            $image = $request->file('blog_gorsel');

            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $extension = $image->getClientOriginalExtension();

            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->withErrors(['blog_gorsel' => 'Geçersiz dosya türü. Yalnızca JPG, JPEG, PNG ve WEBP dosyaları yükleyebilirsiniz.']);
            }

            $maxSize = 2048; // KB cinsinden
            if ($image->getSize() > $maxSize * 1024) {
                return redirect()->back()->withErrors(['blog_gorsel' => 'Dosya boyutu 2MB\'yi aşamaz.']);
            }

            $imageName = hexdec(uniqid()) . '.' . $extension;

            try {
                $manager = new ImageManager(new Driver());
                $img = $manager->read($image->getRealPath());
                $img->toJpeg(80)->save(public_path('upload/blog/' . $imageName));
                $save_url = 'upload/blog/' . $imageName;

                if ($blog->blog_gorsel && file_exists(public_path($blog->blog_gorsel))) {
                    unlink(public_path($blog->blog_gorsel));
                }

                $blog->blog_gorsel = $save_url;
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return redirect()->back()->withErrors(['blog_gorsel' => 'Veritabanına kayıt sırasında bir hata oluştu: ' . $e->getMessage()]);
            }
        }

        $blog->blog_baslik = $request->input('blog_baslik');
        $blog->blog_aciklama = $request->input('blog_aciklama');
        $blog->updated_at = Carbon::now()->locale('tr_TR');
        $blog->save();

        $notification = array(
            'message' => 'Düzenleme Başarılı',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.blog')->with($notification);
    }

    public function AdminBlogSil($id)
    {
        $item = Blog::find($id);

        if ($item->blog_gorsel && file_exists(public_path($item->blog_gorsel))) {
            unlink(public_path($item->blog_gorsel));
        }

        Blog::find($id)->delete();

        $notification = array(
            'message' => 'Blog Başarılı Şekilde Silindi.',
            'alert-type' =>'success'
        );
        return redirect()->route('admin.blog')->with($notification);
    }
}
