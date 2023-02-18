<?php

namespace App\Services;

use App\Repositories\ExampleRepository;

/**
 * ロジックなどを書くfunctionをを格納するクラス
 */
class ExampleService
{
    public function __construct(
        private ?ExampleRepository $_exampleRepoExampleRepository = null
    ){}

    /**
     * Example function
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->_exampleRepoExampleRepository->getMessage();
    }
}