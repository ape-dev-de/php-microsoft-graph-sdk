<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEvent
 */
class TimeCardEvent
{
    public function __construct(
        /** The time the entry is recorded. */
        public ?\DateTimeInterface $dateTime = null,
        /** Indicates whether this action happens at an approved location. */
        public ?bool $isAtApprovedLocation = null,
        /** Notes about the timeCardEvent. */
        public ?string $notes = null
    ) {}
}
