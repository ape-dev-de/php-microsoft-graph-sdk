<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityWindow
 */
class BookingsAvailabilityWindow
{
    /**  */
    public ?BookingsServiceAvailabilityType $availabilityType = null;

    /** 
     * The hours of operation in a week. The business hours value is set to null if the availability type isn't customWeeklyHours.
     * @var BookingWorkHours[]
     */
    public array $businessHours = [];

    /** End date of the availability window. */
    public ?\DateTimeInterface $endDate = null;

    /** Start date of the availability window. */
    public ?\DateTimeInterface $startDate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['availabilityType'])) {
            $this->availabilityType = $data['availabilityType'];
        }
        if (isset($data['businessHours'])) {
            $this->businessHours = $data['businessHours'];
        }
        if (isset($data['endDate'])) {
            $this->endDate = $data['endDate'];
        }
        if (isset($data['startDate'])) {
            $this->startDate = $data['startDate'];
        }
    }
}
