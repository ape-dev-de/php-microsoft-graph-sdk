<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermStoreGroup resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - parentSiteId
 * - scope
 * - sets
 */
class TermStoreGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TermStoreGroup
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PARENT_SITE_ID = 'parentSiteId';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SETS = 'sets';

    /**
     * Select specific TermStoreGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
