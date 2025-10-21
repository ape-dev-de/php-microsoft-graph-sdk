<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Trending resources
 *
 * Available select fields:
 * - lastModifiedDateTime
 * - resourceReference
 * - resourceVisualization
 * - weight
 * - resource
 */
class TrendingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Trending
     */
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RESOURCE_REFERENCE = 'resourceReference';
    public const FIELD_RESOURCE_VISUALIZATION = 'resourceVisualization';
    public const FIELD_WEIGHT = 'weight';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific Trending properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
