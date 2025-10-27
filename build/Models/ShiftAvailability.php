<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShiftAvailability
 */
class ShiftAvailability
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Specifies the pattern for recurrence
     * @var PatternedRecurrence|\stdClass|null
     */
    public PatternedRecurrence|\stdClass|null $recurrence = null;

    /** 
     * The time slot(s) preferred by the user.
     * @var TimeRange[]
     */
    public array $timeSlots = [];

    /** Specifies the time zone for the indicated time. */
    public ?string $timeZone = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['recurrence'])) {
            $this->recurrence = is_array($data['recurrence']) ? new PatternedRecurrence($data['recurrence']) : $data['recurrence'];
        }
        if (isset($data['timeSlots'])) {
            $this->timeSlots = $data['timeSlots'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
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
