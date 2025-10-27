<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeRange
 */
class TimeRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** End time for the time range. */
    public ?string $endTime = null;

    /** Start time for the time range. */
    public ?string $startTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['endTime'])) {
            $this->endTime = $data['endTime'];
        }
        if (isset($data['startTime'])) {
            $this->startTime = $data['startTime'];
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
