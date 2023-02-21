<?php

namespace App\Services;

use App\Repositories\SocialiteRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function __construct(private ?UserRepository $_userRepository = null, private ?SocialiteRepository $_socialiteRepository = null)
    {
    }

    /**
     * 他のサービス（Googleなど）を利用したアプリの認証のロジック
     *
     * @param string $provider
     * @return void
     */
    public function loginBySocialite(string $provider): void
    {
        $googleUser = $this->_socialiteRepository->getUser($provider);
        $appUser = $this->_userRepository->getUserByEmail($googleUser->getEmail());
        if ($appUser)
            Auth::login($appUser);
        // アプリユーザの作成
    }
}
