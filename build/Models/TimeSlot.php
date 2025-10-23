<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeSlot
 */
class TimeSlot
{
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
        if (isset($data['end'])) {
            $this->end = $data['end'];
        }
        if (isset($data['start'])) {
            $this->start = $data['start'];
        }
    }
}
