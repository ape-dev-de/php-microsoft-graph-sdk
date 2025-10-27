<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventStatus
 */
class SecurityRetentionEventStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The error if the status isn't successful.
     * @var PublicError|\stdClass|null
     */
    public PublicError|\stdClass|null $error = null;

    /** 
     * The status of the distribution. The possible values are: pending, error, success, notAvaliable.
     * @var SecurityEventStatusType|\stdClass|null
     */
    public SecurityEventStatusType|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? SecurityEventStatusType::tryFrom($data['status']) : $data['status'];
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
