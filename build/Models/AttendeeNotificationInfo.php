<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeNotificationInfo
 */
class AttendeeNotificationInfo
{
    /**
     * The phone number of the external attendee. Required.
     */
    private ?string $phoneNumber;

    /**
     * The time zone of the external attendee. The timeZone property can be set to any of the time zones currently supported by Windows. Required.
     */
    private ?string $timeZone;


    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }

}
