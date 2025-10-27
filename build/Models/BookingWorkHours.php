<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkHours
 */
class BookingWorkHours
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?DayOfWeek $day = null;

    /** 
     * A list of start/end times during a day.
     * @var BookingWorkTimeSlot[]
     */
    public array $timeSlots = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['day'])) {
            $this->day = is_array($data['day']) ? new DayOfWeek($data['day']) : $data['day'];
        }
        if (isset($data['timeSlots'])) {
            $this->timeSlots = $data['timeSlots'];
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
