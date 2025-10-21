<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceOperation resources
 *
 * Available select fields:
 */
class ResourceOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourceOperation
     */

    /**
     * Select specific ResourceOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
