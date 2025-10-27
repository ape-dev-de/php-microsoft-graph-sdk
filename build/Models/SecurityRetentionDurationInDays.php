<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionDurationInDays
 */
class SecurityRetentionDurationInDays
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies the time period in days for which an item with the applied retention label will be retained for. */
    public ?float $days = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['days'])) {
            $this->days = $data['days'];
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
