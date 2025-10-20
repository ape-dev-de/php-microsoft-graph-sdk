<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OfficeGraphInsights resources
 *
 * Available select fields:
 * - shared
 * - trending
 * - used
 */
class OfficeGraphInsightsQueryOptions extends QueryOptions
{
    public const FIELD_SHARED = 'shared';
    public const FIELD_TRENDING = 'trending';
    public const FIELD_USED = 'used';

    /**
     * Select specific OfficeGraphInsights properties
     * 
     * @param array<string> $select Use OfficeGraphInsightsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
