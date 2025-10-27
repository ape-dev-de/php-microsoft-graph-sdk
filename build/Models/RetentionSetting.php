<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionSetting
 */
class RetentionSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The frequency of the backup. */
    public ?string $interval = null;

    /** The period of time to retain the protected data for a single Microsoft 365 service. */
    public ?string $period = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['interval'])) {
            $this->interval = $data['interval'];
        }
        if (isset($data['period'])) {
            $this->period = $data['period'];
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
