<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessLocations resources
 *
 * Available select fields:
 * - excludeLocations
 * - includeLocations
 */
class ConditionalAccessLocationsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessLocations
     */
    public const FIELD_EXCLUDE_LOCATIONS = 'excludeLocations';
    public const FIELD_INCLUDE_LOCATIONS = 'includeLocations';

    /**
     * Select specific ConditionalAccessLocations properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
