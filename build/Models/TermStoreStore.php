<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreStore
 */
class TermStoreStore
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Default language of the term store. */
        public ?string $defaultLanguageTag = null,
        /** @var string[] List of languages for the term store. */
        public array $languageTags = [],
        /** Collection of all groups available in the term store. */
        public array $groups = [],
        /** @var string[] Collection of all sets available in the term store. This relationship can only be used to load a specific term set. */
        public array $sets = []
    ) {}
}
