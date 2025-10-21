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
     */
    private ?string $pattern;

    /**
     * The duration of an event.
     */
    private ?string $range;


    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;
        return $this;
    }

    public function getRange(): ?string
    {
        return $this->range;
    }

    public function setRange(?string $range): self
    {
        $this->range = $range;
        return $this;
    }

}
