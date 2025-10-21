<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSchedule
 */
class RequestSchedule
{
    public function __construct(
        /** When the eligible or active assignment expires. */
        public ?string $expiration = null,
        /** The frequency of the  eligible or active assignment. This property is currently unsupported in PIM. */
        public ?string $recurrence = null,
        /** When the  eligible or active assignment becomes active. */
        public ?\DateTimeInterface $startDateTime = null
    ) {}
}
