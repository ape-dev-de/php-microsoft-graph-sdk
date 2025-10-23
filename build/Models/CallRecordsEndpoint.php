<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsEndpoint
 */
class CallRecordsEndpoint
{
    /** 
     * User-agent reported by this endpoint.
     * @var CallRecordsUserAgent|\stdClass|null
     */
    public mixed $userAgent = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userAgent'])) {
            $this->userAgent = $data['userAgent'];
        }
    }
}
