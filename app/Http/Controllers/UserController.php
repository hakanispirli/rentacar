<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function UserDashboard()
    {
        return view('frontend.dashboard.dashboard');
    }

    public function Logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Çıkış Başarılı',
            'alert-type' =>'success'
        );

        return redirect('/login')->with($notification);
    }

    public function Profile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('frontend.dashboard.dashboard', compact('profileData'));
    }

    public function ProfileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $notification = array(
            'message' => 'Admin Profil Bilgileri Güncellendi.',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function ChangePassword(Request $request)
    {
        $request->validate([
            'old_password'  =>  'required',
            'new_password'  =>  'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Mevcut şifreyi yanlış girildi!',
                'alert-type' =>'error'
            );
            return back()->with($notification);
        }

        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Şifre başarılı şekilde değiştirildi.',
            'alert-type' =>'success'
        );
        return back()->with($notification);
    }
}
