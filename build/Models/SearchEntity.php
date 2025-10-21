<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchEntity
 */
class SearchEntity
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Administrative answer in Microsoft Search results to define common acronyms in an organization. */
        public array $acronyms = [],
        /** Administrative answer in Microsoft Search results for common search queries in an organization. */
        public array $bookmarks = [],
        /** @var string[] Administrative answer in Microsoft Search results that provide answers for specific search keywords in an organization. */
        public array $qnas = []
    ) {}
}
