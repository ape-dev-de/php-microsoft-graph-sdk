<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessPlatforms resources
 *
 * Available select fields:
 * - excludePlatforms
 * - includePlatforms
 */
class ConditionalAccessPlatformsQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDE_PLATFORMS = 'excludePlatforms';
    public const FIELD_INCLUDE_PLATFORMS = 'includePlatforms';

    /**
     * Select specific ConditionalAccessPlatforms properties
     * 
     * @param array<string> $select Use ConditionalAccessPlatformsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
