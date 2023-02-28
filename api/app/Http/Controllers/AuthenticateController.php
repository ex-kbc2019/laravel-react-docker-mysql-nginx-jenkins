<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\AuthenticateService;
use App\Services\SocialiteService;

class AuthenticateController extends Controller
{

    public function __construct(
        private ?SocialiteService $_socialiteService = null,
        private ?AuthenticateService $_authenticateService = null
    ){
    }

     /**
      * function returning redirect url of other service
      *
      * @param string $provider
      * @return JsonResponse
      */
    public function redirectToOAuth(string $provider): JsonResponse

    {
        $_redirectUrl = $this->_socialiteService->getRedirectUrl($provider);
        return response()->json([
            'redirect_url' => $_redirectUrl,
        ]);
    }

    /**
     * function logging in to this app with provider
     *
     * @param string $provider
     * @return RedirectResponse
     */
    public function handleOAuthCallback(string $provider): RedirectResponse
    {
        $this->_authenticateService->oAuthLogin($provider);
        return redirect("/");
    }
}
