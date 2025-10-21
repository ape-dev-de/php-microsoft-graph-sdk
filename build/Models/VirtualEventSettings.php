<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSettings
 */
class VirtualEventSettings
{
    /**
     * Indicates whether virtual event attendees receive email notifications.
     */
    private ?string $isAttendeeEmailNotificationEnabled;


    public function getIsAttendeeEmailNotificationEnabled(): ?string
    {
        return $this->isAttendeeEmailNotificationEnabled;
    }

    public function setIsAttendeeEmailNotificationEnabled(?string $isAttendeeEmailNotificationEnabled): self
    {
        $this->isAttendeeEmailNotificationEnabled = $isAttendeeEmailNotificationEnabled;
        return $this;
    }

}
