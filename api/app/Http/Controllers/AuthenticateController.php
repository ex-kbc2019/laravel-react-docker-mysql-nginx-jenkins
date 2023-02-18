<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthenticateController extends Controller
{
    public function redirectToGoogle()
    {
        // Google へのリダイレクトURLを返す
        $redirectUrl = Socialite::driver("google")->redirect()->getTargetUrl();
        return response()->json([
            'redirect_url' => $redirectUrl,
        ]);
    }

    public function handleGoogleCallback()
    {
        // Google 認証後の処理
        // あとで処理を追加しますが、とりあえず dd() で取得するユーザー情報を確認
        $gUser = Socialite::driver('google')->stateless()->user();
        $login_user = User::where("email", $gUser->getEmail())->first();
        Auth::login($login_user, true);
        // dd(Auth::user());
        return redirect("/");
    }
}
