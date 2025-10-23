<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeClockSettings
 */
class TimeClockSettings
{
    /** 
     * The approved location of the timeClock.
     * @var GeoCoordinates|\stdClass|null
     */
    public mixed $approvedLocation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['approvedLocation'])) {
            $this->approvedLocation = is_array($data['approvedLocation']) ? new GeoCoordinates($data['approvedLocation']) : $data['approvedLocation'];
        }
    }
}
