<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectFlowTypes resources
 *
 * Available select fields:
 */
class ObjectFlowTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectFlowTypes
     */

    /**
     * Select specific ObjectFlowTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
