<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingWorkTimeSlot
 */
class BookingWorkTimeSlot
{
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
        if (isset($data['endTime'])) {
            $this->endTime = $data['endTime'];
        }
        if (isset($data['startTime'])) {
            $this->startTime = $data['startTime'];
        }
    }
}
