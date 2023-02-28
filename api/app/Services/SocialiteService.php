<?php

namespace App\Services;

use App\Repositories\SocialiteRepository;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class SocialiteService
{

    public function __construct()
    {
    }

    /**
     * get redirect url from repository
     *
     * @param string $provider
     * @return string
     */
    public function getRedirectUrl(string $provider): string
    {
        return Socialite::driver($provider)->redirect()->getTargetUrl();
    }

    /**
     * get already authenticating user with other service from repository
     *
     * @param string $provider
     * @return User
     */
    public function getUser(string $provider): User
    {
        return Socialite::driver($provider)->stateless()->user();
    }
}
