<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UsedInsight resources
 *
 * Available select fields:
 * - lastUsed
 * - resourceReference
 * - resourceVisualization
 * - resource
 */
class UsedInsightQueryOptions extends QueryOptions
{
    public const FIELD_LAST_USED = 'lastUsed';
    public const FIELD_RESOURCE_REFERENCE = 'resourceReference';
    public const FIELD_RESOURCE_VISUALIZATION = 'resourceVisualization';
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific UsedInsight properties
     * 
     * @param array<string> $select Use UsedInsightQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
