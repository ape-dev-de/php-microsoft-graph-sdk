<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeSlot
 */
class TimeSlot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?DateTimeTimeZone $end = null;

    /**  */
    public ?DateTimeTimeZone $start = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['end'])) {
            $this->end = is_array($data['end']) ? new DateTimeTimeZone($data['end']) : $data['end'];
        }
        if (isset($data['start'])) {
            $this->start = is_array($data['start']) ? new DateTimeTimeZone($data['start']) : $data['start'];
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
