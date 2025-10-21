<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomQuestion
 */
class BookingCustomQuestion
{
    public function __construct(
        /** The expected answer type. The possible values are: text, radioButton, unknownFutureValue. */
        public ?string $answerInputType = null,
        /** @var string[] List of possible answer values. */
        public array $answerOptions = [],
        /** The date, time, and time zone when the custom question was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The question. */
        public ?string $displayName = null,
        /** Represents a custom question of the business. */
        public ?\DateTimeInterface $lastUpdatedDateTime = null
    ) {}
}
