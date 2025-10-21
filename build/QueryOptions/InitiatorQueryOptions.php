<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Initiator resources
 *
 * Available select fields:
 */
class InitiatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Initiator
     */

    /**
     * Select specific Initiator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
