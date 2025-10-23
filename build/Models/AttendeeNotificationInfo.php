<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeNotificationInfo
 */
class AttendeeNotificationInfo
{
    /** The phone number of the external attendee. Required. */
    public ?string $phoneNumber = null;

    /** The time zone of the external attendee. The timeZone property can be set to any of the time zones currently supported by Windows. Required. */
    public ?string $timeZone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['phoneNumber'])) {
            $this->phoneNumber = $data['phoneNumber'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
        }
    }
}
