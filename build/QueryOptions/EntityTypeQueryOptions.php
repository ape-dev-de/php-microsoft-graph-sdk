<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntityType resources
 *
 * Available select fields:
 */
class EntityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EntityType
     */

    /**
     * Select specific EntityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
