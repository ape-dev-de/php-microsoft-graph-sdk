<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

/**
 * Base class for all request builders
 */
abstract class BaseRequestBuilder
{
    protected GraphClient $client;
    protected string $path;

    /**
     * Constructor
     *
     * @param GraphClient $client The HTTP client
     * @param string $path The resource path
     */
    public function __construct(GraphClient $client, string $path)
    {
        $this->client = $client;
        $this->path = $path;
    }

    /**
     * Get the full path for this resource
     *
     * @return string
     */
    protected function getFullPath(): string
    {
        return $this->path;
    }

    /**
     * Build a path by appending a segment
     *
     * @param string $segment The path segment to append
     * @return string
     */
    protected function buildPath(string $segment): string
    {
        return $this->path . '/' . $segment;
    }
}
