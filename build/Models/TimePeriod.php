<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimePeriod
 */
class TimePeriod
{
    /** The date time of the end of the time period. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The date time of the start of the time period. */
    public ?\DateTimeInterface $startDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['endDateTime'])) {
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
    }
}
