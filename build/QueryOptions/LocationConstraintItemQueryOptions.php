<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocationConstraintItem resources
 *
 * Available select fields:
 * - resolveAvailability
 */
class LocationConstraintItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocationConstraintItem
     */
    public const FIELD_RESOLVE_AVAILABILITY = 'resolveAvailability';

    /**
     * Select specific LocationConstraintItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
