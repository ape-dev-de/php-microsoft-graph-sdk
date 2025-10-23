<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSettings
 */
class VirtualEventSettings
{
    /** Indicates whether virtual event attendees receive email notifications. */
    public ?bool $isAttendeeEmailNotificationEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isAttendeeEmailNotificationEnabled'])) {
            $this->isAttendeeEmailNotificationEnabled = $data['isAttendeeEmailNotificationEnabled'];
        }
    }
}
