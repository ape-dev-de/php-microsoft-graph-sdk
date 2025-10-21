<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResponse
 */
class RestorePointSearchResponse
{
    public function __construct(
        /** @var string[] Contains  alist of protection units with no restore points. */
        public array $noResultProtectionUnitIds = [],
        /** The unique identifier of the search response. */
        public ?string $searchResponseId = null,
        /** @var string[] Contains a collection of restore points. */
        public array $searchResults = []
    ) {}
}
