<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EscrowBehavior resources
 *
 * Available select fields:
 */
class EscrowBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EscrowBehavior
     */

    /**
     * Select specific EscrowBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
