<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsEndpoint
 */
class CallRecordsEndpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['userAgent'])) {
            $this->userAgent = is_array($data['userAgent']) ? new CallRecordsUserAgent($data['userAgent']) : $data['userAgent'];
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
