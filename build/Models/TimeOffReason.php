<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffReason
 */
class TimeOffReason
{
    public function __construct(
        /** The code of the timeOffReason to represent an external identifier. This field must be unique within the team in Microsoft Teams and uses an alphanumeric format, with a maximum of 100 characters. */
        public ?string $code = null,
        /** The name of the timeOffReason. Required. */
        public ?string $displayName = null,
        /** Supported icon types are: none, car, calendar, running, plane, firstAid, doctor, notWorking, clock, juryDuty, globe, cup, phone, weather, umbrella, piggyBank, dog, cake, trafficCone, pin, sunny. Required. */
        public ?string $iconType = null,
        /** Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required. */
        public ?string $isActive = null
    ) {}
}
