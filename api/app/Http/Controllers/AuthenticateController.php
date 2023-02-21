<?php

namespace App\Http\Controllers;

use App\Services\SocialiteService;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{

    public function __construct(private ?SocialiteService $_socialiteService = null, private ?UserService $_userService = null)
    {
    }

    /**
     * function returning redirect url of other service
     *
     * @return JsonResponse
     */
    public function redirectToGoogle(): JsonResponse

    {
        $redirectUrl = $this->_socialiteService->getRedirectUrl("google");
        return response()->json([
            'redirect_url' => $redirectUrl,
        ]);
    }

    /**
     * function logging in to this app with google
     *
     * @return RedirectResponse
     */
    public function handleGoogleCallback(): RedirectResponse
    {
        $this->_userService->loginBySocialite("google");
        return redirect("/");
    }
}
