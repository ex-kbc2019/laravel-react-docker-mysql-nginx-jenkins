<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Services\ExampleService;

/**
 * Example class
 */
class ExampleController extends Controller
{
    public function __construct(
        private ?ExampleService $_exampleService = null
    ) {}

    /**
     * Example function
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $_message = $this->_exampleService->getMessage();
        return response()->json(["message" => $_message]);
    }
}
