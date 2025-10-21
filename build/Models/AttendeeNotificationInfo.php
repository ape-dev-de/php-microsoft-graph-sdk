<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeNotificationInfo
 */
class AttendeeNotificationInfo
{
    public function __construct(
        /** The phone number of the external attendee. Required. */
        public ?string $phoneNumber = null,
        /** The time zone of the external attendee. The timeZone property can be set to any of the time zones currently supported by Windows. Required. */
        public ?string $timeZone = null
    ) {}
}
