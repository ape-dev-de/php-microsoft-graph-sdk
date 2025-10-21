<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AcceptJoinResponse resources
 *
 * Available select fields:
 */
class AcceptJoinResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AcceptJoinResponse
     */

    /**
     * Select specific AcceptJoinResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
