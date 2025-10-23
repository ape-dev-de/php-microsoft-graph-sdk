<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HttpRequestEndpoint
 */
class HttpRequestEndpoint
{
    /** The HTTP endpoint that a custom extension calls. */
    public ?string $targetUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['targetUrl'])) {
            $this->targetUrl = $data['targetUrl'];
        }
    }
}
