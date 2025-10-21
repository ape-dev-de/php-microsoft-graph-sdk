<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedInsight resources
 *
 * Available select fields:
 * - lastShared
 * - resourceReference
 * - resourceVisualization
 * - sharingHistory
 * - lastSharedMethod
 * - resource
 */
class SharedInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedInsight
     */
    public const FIELD_LAST_SHARED = 'lastShared';
    public const FIELD_RESOURCE_REFERENCE = 'resourceReference';
    public const FIELD_RESOURCE_VISUALIZATION = 'resourceVisualization';
    public const FIELD_SHARING_HISTORY = 'sharingHistory';
    public const FIELD_LAST_SHARED_METHOD = 'lastSharedMethod';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific SharedInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
