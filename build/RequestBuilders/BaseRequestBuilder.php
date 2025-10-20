<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

abstract class BaseRequestBuilder
{
    protected GraphClient $client;
    protected string $path;

    public function __construct(GraphClient $client, string $path = '')
    {
        $this->client = $client;
        $this->path = $path;
    }

    protected function getFullPath(): string
    {
        return $this->path;
    }

    protected function buildPath(string ...$segments): string
    {
        $path = $this->path;
        foreach ($segments as $segment) {
            $path .= '/' . ltrim($segment, '/');
        }
        return $path;
    }
}