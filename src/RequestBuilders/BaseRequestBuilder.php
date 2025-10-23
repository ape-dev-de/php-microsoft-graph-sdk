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
    protected string $requestUrl;

    /**
     * Constructor
     *
     * @param GraphClient $client The HTTP client
     * @param string $requestUrl The resource URL
     */
    public function __construct(GraphClient $client, string $requestUrl)
    {
        $this->client = $client;
        $this->requestUrl = $requestUrl;
    }

    /**
     * Get the full URL for this resource
     *
     * @return string
     */
    protected function getRequestUrl(): string
    {
        return $this->requestUrl;
    }

    /**
     * Build a URL by appending a segment
     *
     * @param string $segment The path segment to append
     * @return string
     */
    protected function buildUrl(string $segment): string
    {
        return $this->requestUrl . '/' . $segment;
    }
}
