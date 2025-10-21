<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AvailabilityItem
 */
class AvailabilityItem
{
    public function __construct(
        /**  */
        public ?string $endDateTime = null,
        /** Indicates the service ID for 1:n appointments. If the appointment is of type 1:n, this field is present, otherwise, null. */
        public ?string $serviceId = null,
        /**  */
        public ?string $startDateTime = null,
        /** The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
