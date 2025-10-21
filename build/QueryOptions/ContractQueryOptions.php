<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Contract resources
 *
 * Available select fields:
 */
class ContractQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Contract
     */

    /**
     * Select specific Contract properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
