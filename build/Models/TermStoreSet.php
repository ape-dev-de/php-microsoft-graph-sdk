<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreSet
 */
class TermStoreSet
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time of set creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description that gives details on the term usage. */
        public ?string $description = null,
        /** Name of the set for each languageTag. */
        public array $localizedNames = [],
        /** Custom properties for the set. */
        public array $properties = [],
        /** Children terms of set in term [store]. */
        public array $children = [],
        /**  */
        public ?string $parentGroup = null,
        /** Indicates which terms have been pinned or reused directly under the set. */
        public array $relations = [],
        /** All the terms under the set. */
        public array $terms = []
    ) {}
}
