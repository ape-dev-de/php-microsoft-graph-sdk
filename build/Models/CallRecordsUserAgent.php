<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserAgent
 */
class CallRecordsUserAgent
{
    /** Identifies the version of application software used by this endpoint. */
    public ?string $applicationVersion = null;

    /** User-agent header value reported by this endpoint. */
    public ?string $headerValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['applicationVersion'])) {
            $this->applicationVersion = $data['applicationVersion'];
        }
        if (isset($data['headerValue'])) {
            $this->headerValue = $data['headerValue'];
        }
    }
}
