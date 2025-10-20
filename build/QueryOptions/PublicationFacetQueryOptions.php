<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PublicationFacet resources
 *
 * Available select fields:
 * - checkedOutBy
 * - level
 * - versionId
 */
class PublicationFacetQueryOptions extends QueryOptions
{
    public const FIELD_CHECKED_OUT_BY = 'checkedOutBy';
    public const FIELD_LEVEL = 'level';
    public const FIELD_VERSION_ID = 'versionId';

    /**
     * Select specific PublicationFacet properties
     * 
     * @param array<string> $select Use PublicationFacetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
