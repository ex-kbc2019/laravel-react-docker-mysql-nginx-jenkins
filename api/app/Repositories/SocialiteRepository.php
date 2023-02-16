<?php

namespace App\Repositories;

use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class SocialiteRepository
{

    /**
     * return google authenticate url function
     *
     * @param string $provider
     *
     * @return string
     */
    public function getAuthenticateRedirectUrl(string $provider): string
    {
        return Socialite::driver($provider)->redirect()->getTargetUrl();
    }

    /**
     * get already authenticating user with other service
     *
     * @param string $provider
     * @return User
     */
    public function getUser(string $provider): User
    {
        return Socialite::driver($provider)->stateless()->user();
    }
}
