<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * Example class
 */
class ExampleController extends Controller
{
    /**
     * Example function
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return response()->json(["message" => 'Hello World']);
    }
}
