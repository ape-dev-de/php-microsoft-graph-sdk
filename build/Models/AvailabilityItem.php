<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AvailabilityItem
 */
class AvailabilityItem
{
    /**  */
    public ?DateTimeTimeZone $endDateTime = null;

    /** Indicates the service ID for 1:n appointments. If the appointment is of type 1:n, this field is present, otherwise, null. */
    public ?string $serviceId = null;

    /**  */
    public ?DateTimeTimeZone $startDateTime = null;

    /** 
     * The status of the staff member. Possible values are: available, busy, slotsAvailable, outOfOffice, unknownFutureValue.
     * @var BookingsAvailabilityStatus|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_array($data['endDateTime']) ? new DateTimeTimeZone($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['serviceId'])) {
            $this->serviceId = $data['serviceId'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new BookingsAvailabilityStatus($data['status']) : $data['status'];
        }
    }
}
