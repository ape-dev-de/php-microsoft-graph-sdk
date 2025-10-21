<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreTerm
 */
class TermStoreTerm
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time of term creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description about term that is dependent on the languageTag. */
        public array $descriptions = [],
        /** Label metadata for a term. */
        public array $labels = [],
        /** Last date and time of term modification. Read-only. */
        public array $lastModifiedDateTime = [],
        /** Collection of properties on the term. */
        public ?string $items = null
    ) {}
}
