<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingSourceType resources
 *
 * Available select fields:
 */
class AttributeMappingSourceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeMappingSourceType
     */

    /**
     * Select specific AttributeMappingSourceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
