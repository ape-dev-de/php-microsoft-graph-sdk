<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResponse
 */
class SearchResponse
{
    public function __construct(
        /** A collection of search results. */
        public array $hitsContainers = [],
        /** Provides information related to spelling corrections in the alteration response. */
        public ?string $queryAlterationResponse = null,
        /** A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates. */
        public ?string $resultTemplates = null,
        /** @var string[] Contains the search terms sent in the initial search query. */
        public array $searchTerms = []
    ) {}
}
