<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocationConstraint resources
 *
 * Available select fields:
 * - isRequired
 * - locations
 * - suggestLocation
 */
class LocationConstraintQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocationConstraint
     */
    public const FIELD_IS_REQUIRED = 'isRequired';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_SUGGEST_LOCATION = 'suggestLocation';

    /**
     * Select specific LocationConstraint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
