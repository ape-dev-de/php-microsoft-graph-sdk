<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterOperatorSchema resources
 *
 * Available select fields:
 */
class FilterOperatorSchemaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterOperatorSchema
     */

    /**
     * Select specific FilterOperatorSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
