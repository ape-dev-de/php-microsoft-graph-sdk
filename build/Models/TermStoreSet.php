<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreSet
 */
class TermStoreSet
{
    public function __construct(
        /** Date and time of set creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description that gives details on the term usage. */
        public ?string $description = null,
        /** @var mixed[] Name of the set for each languageTag. */
        public array $localizedNames = [],
        /** Custom properties for the set. */
        public ?string $items = null
    ) {}
}
