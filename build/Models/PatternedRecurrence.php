<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PatternedRecurrence
 */
class PatternedRecurrence
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The frequency of an event.  For access reviews: Do not specify this property for a one-time access review.  Only interval, dayOfMonth, and type (weekly, absoluteMonthly) properties of recurrencePattern are supported.
     * @var RecurrencePattern|\stdClass|null
     */
    public mixed $pattern = null;

    /** 
     * The duration of an event.
     * @var RecurrenceRange|\stdClass|null
     */
    public mixed $range = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['pattern'])) {
            $this->pattern = is_array($data['pattern']) ? new RecurrencePattern($data['pattern']) : $data['pattern'];
        }
        if (isset($data['range'])) {
            $this->range = is_array($data['range']) ? new RecurrenceRange($data['range']) : $data['range'];
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
