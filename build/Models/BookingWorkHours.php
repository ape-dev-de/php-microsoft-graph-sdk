<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkHours
 */
class BookingWorkHours
{
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
        if (isset($data['day'])) {
            $this->day = $data['day'];
        }
        if (isset($data['timeSlots'])) {
            $this->timeSlots = $data['timeSlots'];
        }
    }
}
