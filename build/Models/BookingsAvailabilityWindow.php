<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingsAvailabilityWindow
 */
class BookingsAvailabilityWindow
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
        $this->rawData = $data;
        if (isset($data['availabilityType'])) {
            $this->availabilityType = is_array($data['availabilityType']) ? new BookingsServiceAvailabilityType($data['availabilityType']) : $data['availabilityType'];
        }
        if (isset($data['businessHours'])) {
            $this->businessHours = $data['businessHours'];
        }
        if (isset($data['endDate'])) {
            $this->endDate = is_string($data['endDate']) ? new \DateTimeImmutable($data['endDate']) : $data['endDate'];
        }
        if (isset($data['startDate'])) {
            $this->startDate = is_string($data['startDate']) ? new \DateTimeImmutable($data['startDate']) : $data['startDate'];
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
