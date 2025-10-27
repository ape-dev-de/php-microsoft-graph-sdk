<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HttpRequestEndpoint
 */
class HttpRequestEndpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The HTTP endpoint that a custom extension calls. */
    public ?string $targetUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['targetUrl'])) {
            $this->targetUrl = $data['targetUrl'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
