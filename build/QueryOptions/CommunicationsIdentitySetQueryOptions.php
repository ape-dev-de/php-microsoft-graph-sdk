<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsIdentitySet resources
 *
 * Available select fields:
 */
class CommunicationsIdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsIdentitySet
     */

    /**
     * Select specific CommunicationsIdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
