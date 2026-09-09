<?php

namespace App\Manager;

class ApiManager
{
    public function getStatus(): array
    {
        return [
            'app' => 'symfony-api',
            'framework' => 'Symfony 7',
            'status' => 'ok',
        ];
    }

    public function getHealth(): array
    {
        return [
            'status' => 'healthy',
            'timestamp' => (new \DateTimeImmutable())->format(\DateTimeInterface::ATOM),
        ];
    }
}
