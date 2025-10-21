<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchQuery
 */
class SearchQuery
{
    public function __construct(
        /** The search query containing the search terms. Required. */
        public ?string $queryString = null,
        /** Provides a way to decorate the query string. Supports both KQL and query variables. Optional. */
        public ?string $queryTemplate = null
    ) {}
}
