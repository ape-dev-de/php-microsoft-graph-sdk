<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkTimeSlot
 */
class BookingWorkTimeSlot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The time of the day when work stops. For example, 17:00:00.0000000. */
    public ?string $endTime = null;

    /** The time of the day when work starts. For example, 08:00:00.0000000. */
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
