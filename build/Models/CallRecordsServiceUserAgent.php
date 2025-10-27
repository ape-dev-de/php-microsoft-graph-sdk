<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsServiceUserAgent
 */
class CallRecordsServiceUserAgent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Identifies the version of application software used by this endpoint. */
    public ?string $applicationVersion = null;

    /** User-agent header value reported by this endpoint. */
    public ?string $headerValue = null;

    /**  */
    public ?CallRecordsServiceRole $role = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationVersion'])) {
            $this->applicationVersion = $data['applicationVersion'];
        }
        if (isset($data['headerValue'])) {
            $this->headerValue = $data['headerValue'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new CallRecordsServiceRole($data['role']) : $data['role'];
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
