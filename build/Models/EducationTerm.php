<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTerm
 */
class EducationTerm
{
    public function __construct(
        /** Display name of the term. */
        public ?string $displayName = null,
        /** End of the term. */
        public ?\DateTimeInterface $endDate = null,
        /** ID of term in the syncing system. */
        public ?string $externalId = null,
        /** Start of the term. */
        public ?\DateTimeInterface $startDate = null
    ) {}
}
