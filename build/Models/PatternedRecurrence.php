<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PatternedRecurrence
 */
class PatternedRecurrence
{
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
        if (isset($data['pattern'])) {
            $this->pattern = $data['pattern'];
        }
        if (isset($data['range'])) {
            $this->range = $data['range'];
        }
    }
}
