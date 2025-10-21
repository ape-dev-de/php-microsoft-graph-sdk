<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSettings
 */
class VirtualEventSettings
{
    public function __construct(
        /** Indicates whether virtual event attendees receive email notifications. */
        public ?bool $isAttendeeEmailNotificationEnabled = null
    ) {}
}
