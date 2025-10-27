<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeConstraint
 */
class TimeConstraint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
     * @var ActivityDomain|\stdClass|null
     */
    public ActivityDomain|\stdClass|null $activityDomain = null;

    /** 
     * 
     * @var TimeSlot[]
     */
    public array $timeSlots = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['activityDomain'])) {
            $this->activityDomain = is_string($data['activityDomain']) ? ActivityDomain::tryFrom($data['activityDomain']) : $data['activityDomain'];
        }
        if (isset($data['timeSlots'])) {
            $this->timeSlots = $data['timeSlots'];
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
