<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePointSearchResponse resources
 *
 * Available select fields:
 * - noResultProtectionUnitIds
 * - searchResponseId
 * - searchResults
 */
class RestorePointSearchResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestorePointSearchResponse
     */
    public const FIELD_NO_RESULT_PROTECTION_UNIT_IDS = 'noResultProtectionUnitIds';
    public const FIELD_SEARCH_RESPONSE_ID = 'searchResponseId';
    public const FIELD_SEARCH_RESULTS = 'searchResults';

    /**
     * Select specific RestorePointSearchResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
