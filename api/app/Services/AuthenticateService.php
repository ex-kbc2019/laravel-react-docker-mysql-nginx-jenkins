<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;

/**
 * Undocumented class
 */
class AuthenticateService
{
    public function __construct(
        private ?UserRepository $_userRepository = null,
        private ?SocialiteService $_socialiteService = null
    ){
    }

    /**
     * 他のサービス（Googleなど）を利用したアプリの認証のロジック
     *
     * @param string $provider
     * @return void
     */
    public function oAuthLogin(string $provider): void
    {
        $_googleUser = $this->_socialiteService->getUser($provider);
        $_appUser = $this->_userRepository->findUserByParams(["email", $_googleUser->getEmail()]);
        if ($_appUser)
            Auth::login($_appUser);
            dd(Auth::user());
        // アプリユーザの作成
    }
}
