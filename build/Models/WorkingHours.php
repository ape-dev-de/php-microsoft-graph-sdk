<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkingHours
 */
class WorkingHours
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The days of the week on which the user works.
     * @var DayOfWeek[]
     */
    public array $daysOfWeek = [];

    /** The time of the day that the user stops working. */
    public ?string $endTime = null;

    /** The time of the day that the user starts working. */
    public ?string $startTime = null;

    /** 
     * The time zone to which the working hours apply.
     * @var TimeZoneBase|\stdClass|null
     */
    public mixed $timeZone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['daysOfWeek'])) {
            $this->daysOfWeek = $data['daysOfWeek'];
        }
        if (isset($data['endTime'])) {
            $this->endTime = $data['endTime'];
        }
        if (isset($data['startTime'])) {
            $this->startTime = $data['startTime'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = is_array($data['timeZone']) ? new TimeZoneBase($data['timeZone']) : $data['timeZone'];
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
