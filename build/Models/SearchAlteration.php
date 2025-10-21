<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlteration
 */
class SearchAlteration
{
    public function __construct(
        /** Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is: /ue000, /ue001. */
        public ?string $alteredHighlightedQueryString = null,
        /** Defines the altered query string with spelling correction. */
        public ?string $alteredQueryString = null,
        /** Represents changed segments related to an original user query. */
        public array $alteredQueryTokens = []
    ) {}
}
