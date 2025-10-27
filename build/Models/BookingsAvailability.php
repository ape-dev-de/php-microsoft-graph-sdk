<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailability
 */
class BookingsAvailability
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?BookingsServiceAvailabilityType $availabilityType = null;

    /** 
     * The hours of operation in a week. The business hours value is set to null if the availability type isn't customWeeklyHours.
     * @var BookingWorkHours[]
     */
    public array $businessHours = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['availabilityType'])) {
            $this->availabilityType = is_string($data['availabilityType']) ? BookingsServiceAvailabilityType::tryFrom($data['availabilityType']) : $data['availabilityType'];
        }
        if (isset($data['businessHours'])) {
            $this->businessHours = $data['businessHours'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
